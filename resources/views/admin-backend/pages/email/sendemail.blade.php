@extends("admin-backend.layouts.main")
@section("content")
<div class="send-email-page container mt-4">
    <h3>Email Members</h3>
    <form action="{{ route('admin.email.storeEmail') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 d-flex align-items-center">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
        <div class="mb-3 recipients">
    <div class="recipients-label"><label>Recipients</label></div>
    <div class="select-all-checkbox"><label for="select-all"><input type="radio" id="select-all" name="select_all"><span>Select All</span></label></div>
    <div class="divider"><h2>OR</h2></div>
    <div class="memberships-checkbox">
        <label for="membership-1">
            <input class="membership-radio" type="checkbox" id="membership-1" name="membership[]" value="L1"><span>Membership level 1</span></label>
        <label for="membership-2">
            <input class="membership-radio" type="checkbox" id="membership-2" name="membership[]" value="L2"><span>Membership level 2</span></label>
        <label for="membership-3">
            <input class="membership-radio" type="checkbox" id="membership-3" name="membership[]" value="L3"><span>Membership level 3</span></label>
        <label for="membership-4">
            <input class="membership-radio" type="checkbox" id="membership-4" name="membership[]" value="L4"><span>Membership level 4</span></label>
    </div>
</div>
        <textarea id="notes-message" id="message" name="message"></textarea>
        <div class="mb-3">
            <label for="attachment" class="form-label">Attach File</label>
            <input type="file" class="form-control" id="attachment" name="attachment">
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
@endsection