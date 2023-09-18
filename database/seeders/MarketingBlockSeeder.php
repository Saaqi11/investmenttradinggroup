<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarketingBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('website_sections')->insert([
            'heading' => 'some more marketing text',
            'sub_heading' => 'With even more marketing content',
            'html' => '<section class="marketing-block">
                            <div class="container">
                                <div class="text-area">
                                    <h4>some more marketing text</h4>
                                    <p>With even more marketing content</p>
                                </div>
                                <div class="image-holder">
                                    <img src="images/img2.png" alt="image-discription">
                                </div>
                                <div class="two-cols">
                                    <!-- Add your marketing content here -->
                                </div>
                            </div>
                        </section>',
            'css' => '.marketing-block {
  padding: 40px 0;
  border-top: 1px solid rgba(0, 0, 0, 0.2); }
  @media (max-width: 767px) {
    .marketing-block {
      padding: 30px 0 0; } }
  .marketing-block .container {
    max-width: 600px;
    margin: 0 auto; }
  .marketing-block .text-area {
    text-align: center;
    font-size: 16px;
    line-height: 1; }
    @media (max-width: 767px) {
      .marketing-block .text-area {
        font-size: 14px; } }
    .marketing-block .text-area h4 {
      font-size: 30px;
      color: #89660b;
      margin: 0 0 10px;
      line-height: 1; }
      @media (max-width: 767px) {
        .marketing-block .text-area h4 {
          font-size: 18px;
          line-height: 21px;
          line-height: 1;
          margin: 5; } }
    .marketing-block .text-area p {
      margin: 0 0 20px; }
  .marketing-block .image-holder {
    margin: 0 0 50px; }
    .marketing-block .image-holder img {
      width: 100%; }
  .marketing-block .two-cols {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin: 0 -30px;
    text-align: left;
    font-size: 14px;
    line-height: 18px;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap; }
    @media (max-width: 767px) {
      .marketing-block .two-cols {
        margin: 0 -15px;
        font-size: 12px; } }
    .marketing-block .two-cols .col {
      width: 50%;
      padding: 0 30px;
      margin: 0 0 30px; }
      @media (max-width: 767px) {
        .marketing-block .two-cols .col {
          padding: 0 15px; } }
      @media (max-width: 479px) {
        .marketing-block .two-cols .col {
          width: 100%;
          text-align: center; } }
    .marketing-block .two-cols .icon {
      width: 52px;
      height: 52px;
      border-radius: 100%;
      margin: 0 0 20px;
      background-color: #edf0f7;
      text-align: center;
      padding: 16px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center; }
      @media (max-width: 479px) {
        .marketing-block .two-cols .icon {
          max-width: 100px;
          margin: 0 auto 20px; } }
      .marketing-block .two-cols .icon img {
        width: 20px; }
    .marketing-block .two-cols h5 {
      font-size: 16px;
      line-height: 1.5;
      color: #3b4754; }
      @media (max-width: 767px) {
        .marketing-block .two-cols h5 {
          font-size: 14px;
          line-height: 1.1; } }',
            'js' => '',
            'section_order' => 6,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
