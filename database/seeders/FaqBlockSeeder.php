<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('website_sections')->insert([
            'heading' => 'Frequently Asked Questions (FAQ)',
            'sub_heading' => "We'll help you out with your questions",
            'html' => '<section class="faq-block">
                            <div class="container">
                                <div class="text-holder">
                                    <h2>Frequently Asked Questions (FAQ)</h2>
                                    <p>We\'ll help you out with your questions</p>
                                </div>
                                <div class="accordion">
                                    <div class="accordion-wrap">
                                        <div class="accordion-header">
                                            <h3>Why is the moon out during the day?</h3>
                                            <span class="plus"><img src="images/plus.png" alt="images"></span>
                                        </div>
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                        </div>
                                    </div>
                                    <!-- Add more FAQ items here -->
                                </div>
                                <div class="btn-holder">
                                    <a href="#" class="btn">Get started</a>
                                </div>
                            </div>
                        </section>',
            'css' => '.faq-block {
  padding: 40px 0;
  border-top: 1px solid rgba(0, 0, 0, 0.2);
  text-align: center; }
  @media (max-width: 767px) {
    .faq-block {
      padding: 30px 0; } }
  .faq-block .container {
    max-width: 560px; }
  .faq-block h2 {
    font-size: 30px;
    color: #89660b;
    margin: 0 0 10px;
    line-height: 1; }
    @media (max-width: 767px) {
      .faq-block h2 {
        font-size: 18px;
        line-height: 21px; } }
  .faq-block p {
    margin: 0 0 10px;
    line-height: 1; }
  .faq-block .btn-holder {
    padding: 10px 0 0; }',
            'js' => '',
            'section_order' => 7,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
