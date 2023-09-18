<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\EmailRecord;
use App\Models\User;
use File;

class EmailController extends Controller
{
    /**
     * Render dashboard email listings view
     * @return View
     */
    public function emailListings(): View
    {
        $emailRecords = EmailRecord::paginate(10);
        return view('admin-backend.pages.email.listings', compact('emailRecords'));
    }
    
    /**
     * Render dashboard send email view
     * @return View
     */
    public function sendEmail(): View
    {
        return view('admin-backend.pages.email.sendemail');
    }

    /**
     * Store email into the database and send emails to users.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeEmail(Request $request)
    {

        $data = $request->validate([
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $membershipLevels = $request->input('membership') ? implode(',' , $request->get('membership')) : '';
        
        $attachmentPath = "";
        if($request->file("attachment")){
            $destination_dir = '/email-attachments/';
            if (!File::exists(public_path($destination_dir))) {
                File::makeDirectory(public_path($destination_dir), 0755, true);
            }
            $file = $request->file('attachment');
            $imageName = time()."_".$file->getClientOriginalName();
            $file->move(public_path($destination_dir), $imageName);
            $attachmentPath = $destination_dir.$imageName;
        }
        $fileButton = '<br><a class="download-attachment-btn" href="'.$attachmentPath.'" download>Download File</>';
        $data['message'] = $data['message'].$fileButton;

        EmailRecord::create([
            'subject' => $data['subject'],
            'message' => $data['message'],
            'attachment' => $attachmentPath,
            'is_all' => $request->has('select_all'),
            'membership_levels' => $membershipLevels,
        ]);

        $users = [];

        if($request->has('select_all')){
            $users = User::all();
        } else {
            
            if(!empty($request->get('membership'))){
                $users = User::whereIn('subscription_level', $request->get('membership'))->get();
            }
            
        }
        $data = [
            'users' => $users,
            'email' => [
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ]
        ];
        if (count($users)  > 0 ) {
            $job = (new \App\Jobs\SendQueueEmail($data))
                ->delay(now()->addSeconds(2)); 
            dispatch($job);
            return redirect()->back()->with('success', 'Email sent successfully!');
        } else {
            return redirect()->back()->with('error', 'Please select users also');
        }

        
    }


}
