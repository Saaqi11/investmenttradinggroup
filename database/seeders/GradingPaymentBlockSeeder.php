<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradingPaymentBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('website_sections')->insert([
            'heading' => 'Cancel, upgrade, or downgrade anytime',
            'sub_heading' => '',
            'html' => '<section class="grading-block" id="payment-block">
                            <div class="container">
                                <div class="text-holder">
                                    <h2>Cancel, upgrade, or downgrade anytime</h2>
                                </div>
                                <!-- Add your PHP code for pricing here -->
                                <div class="four-col">
                                    <!-- Add pricing columns here -->
                                </div>
                                <div class="text">
                                    <p>***All monthly services auto renew and run to the end of your renewal period. Cancellation means auto-renew will cease from the start of the next period. "Unlimited" means you get access to all we have done.</p>
                                </div>
                            </div>
                        </section>',
            'css' => '.grading-block {
  padding: 40px 0 60px;
  max-width: 900px;
  margin: 0 auto;
  text-align: center; }
  @media (max-width: 767px) {
    .grading-block {
      padding: 30px 0; } }
  .grading-block .text-holder h2 {
    font-size: 30px;
    font-weight: 600;
    color: #9e7d20;
    margin: 0 0 30px; }
    @media (max-width: 767px) {
      .grading-block .text-holder h2 {
        font-size: 18px;
        line-height: 21px; } }
  .grading-block .text {
    padding: 20px 0 0;
    color: #32312f;
    font-size: 12px;
    max-width: 860px;
    margin: 0 auto; }
  .grading-block .btn {
    min-width: 160px; }

.four-col {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin: 0 auto -5px;
  max-width: 900px; }
  @media (max-width: 767px) {
    .four-col {
      -ms-flex-wrap: wrap;
      flex-wrap: wrap; } }
  .four-col .col {
    padding: 0 5px;
    width: 25%; }
    @media (max-width: 767px) {
      .four-col .col {
        width: 50%;
        margin-bottom: 10px; } }
  .four-col .grades {
    list-style: none;
    margin: 0;
    padding: 0;
    text-align: center;
    color: #fff;
    font-size: 12px; }
    .four-col .grades .heading {
      background: #89660b;
      padding: 20px 10px;
      color: #fff;
      font-weight: 700;
      font-size: 20px; }
      @media (max-width: 767px) {
        .four-col .grades .heading {
          font-size: 16px;
          line-height: 1;
          padding: 15px 10px; } }
    .four-col .grades li {
      padding: 20px 10px;
      background-color: #292826;
      border-bottom: 1px solid #404146; }
      @media (max-width: 767px) {
        .four-col .grades li {
          padding: 10px; } }
    .four-col .grades .year-wrap {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      font-size: 24px;
      font-weight: 700; }
    .four-col .grades .amount {
      font-size: 12px;
      padding-top: 10px; }
    .four-col .grades .button {
      padding-top: 20px; }
      .four-col .grades .button .btn {
        background-color: #282828;
        border-radius: 50px;
        padding: 10px 10px;
        border: 2px solid #78603c;
        min-width: 160px;
        font-size: 12px; }
        @media (max-width: 767px) {
          .four-col .grades .button .btn {
            min-width: 120px;
            font-size: 10px;
            padding: 5px 6px; } }',
            'js' => '',
            'section_order' => 5,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
