<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('website_sections')->insert([
            'heading' => '4 Level membership to choose from',
            'sub_heading' => '',
            'html' => '<section class="tab-block">
                            <div class="container">
                                <div class="tab-heading">
                                    <h2>4 Level membership to choose from</h2>
                                    <ul class="tabset">
                                        <li class="tab active">Level 1</li>
                                        <li class="tab">Level 2</li>
                                        <li class="tab">Level 3</li>
                                        <li class="tab">Level 4</li>
                                    </ul>
                                </div>
                                <div class="tabcontent active" style="display: block;">
                                    <div class="text-tab">
                                        <div class="text-holder">
                                            <h3>Level 1 - What you get</h3>
                                            <p>Describe level 1 membership benefits</p>
                                        </div>
                                        <div class="image-holder">
                                            <img src="images/img2.png" alt="image-description">
                                        </div>
                                    </div>
                                </div>
                                <!-- Add other tab content here -->
                                <div class="btn-holder">
                                    <a href="#" class="btn">Get started</a>
                                </div>
                            </div>
                        </section>',
            'css' => '.tab-block {
  padding: 40px 0; }
  .tab-block.tab-crypto {
    width: 100%;
    padding: 22px 20px 22px 30px; }
    @media (max-width: 767px) {
      .tab-block.tab-crypto {
        width: 100%;
        padding: 16px; } }
    .tab-block.tab-crypto .tabset {
      border-radius: 0;
      border: none; }
      @media (max-width: 1023px) {
        .tab-block.tab-crypto .tabset {
          -ms-flex-wrap: wrap;
          flex-wrap: wrap; } }
      .tab-block.tab-crypto .tabset li {
        margin: 0 2px 0 0; }
        @media (max-width: 1023px) {
          .tab-block.tab-crypto .tabset li {
            margin: 0 2px 5px; } }
    .tab-block.tab-crypto .tab {
      background-color: #89660b;
      color: #fff;
      padding: 19px 8px;
      line-height: 1;
      font-size: 12px; }
      .tab-block.tab-crypto .tab.active {
        background-color: #000; }
    .tab-block.tab-crypto .text-tab .text-holder {
      width: 100%; }
    .tab-block.tab-crypto .crpto-heading {
      margin: 0;
      text-align: left; }
  @media (max-width: 767px) {
    .tab-block {
      padding: 30px 0; } }
  .tab-block .tab-heading {
    max-width: 100%;
    margin: 0 auto;
    text-align: center; }
    .tab-block .tab-heading h2 {
      font-size: 35px;
      margin: 0 0 10px;
      color: #89660b; }
      @media (max-width: 767px) {
        .tab-block .tab-heading h2 {
          font-size: 22px;
          line-height: 25px; } }
  .tab-block .tabset {
    list-style: none;
    margin: 0;
    padding: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border: 2px solid #89660b;
    border-radius: 5px;
    overflow: hidden; }
  .tab-block .tab {
    color: #cf9742;
    font-size: 18px;
    font-weight: 700;
    padding: 10px 20px;
    background-color: #f2f2f2;
    cursor: pointer;
    border-left: 2px solid #89660b;
    width: 25%;
    text-align: center; }
    @media (max-width: 767px) {
      .tab-block .tab {
        font-size: 12px;
        padding: 10px 4px;
        width: 32.333%; } }
    @media (max-width: 479px) {
      .tab-block .tab {
        width: 48%; } }
    .tab-block .tab:first-child {
      border-left: none; }
  .tab-block .tab.active {
    background-color: #89660b;
    color: #fff; }
  .tab-block h3 {
    color: #3b4754; }
    @media (max-width: 767px) {
      .tab-block h3 {
        margin: 0;
        font-size: 18px;
        line-height: 1; } }
  .tab-block .text-tab {
    padding: 30px 0 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between; }
    @media (max-width: 767px) {
      .tab-block .text-tab {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap; } }
    .tab-block .text-tab .text-holder {
      width: 35%; }
      @media (max-width: 767px) {
        .tab-block .text-tab .text-holder {
          font-size: 14px;
          width: 100%;
          -webkit-box-ordinal-group: 3;
          -ms-flex-order: 2;
          order: 2;
          text-align: center; } }
    .tab-block .text-tab .image-holder {
      width: 60%; }
      @media (max-width: 767px) {
        .tab-block .text-tab .image-holder {
          width: 100%;
          -webkit-box-ordinal-group: 2;
          -ms-flex-order: 1;
          order: 1;
          margin: 0 0 10px; } }
  .tab-block .btn-holder {
    text-align: center;
    padding-top: 40px; }
    @media (max-width: 767px) {
      .tab-block .btn-holder {
        padding-top: 10px; } }
    .tab-block .btn-holder .btn {
      width: 274px;
      padding: 8px 12px;
      border-radius: 30px; }',
            'js' => '',
            'section_order' => 3,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
