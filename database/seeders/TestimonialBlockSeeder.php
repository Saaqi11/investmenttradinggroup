<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('website_sections')->insert([
            'heading' => 'Testimonials',
            'sub_heading' => 'What our members are saying',
            'html' => '<section class="testimonial-block">
        <div class="container">
            <div class="text-holder">
                <h2>Testimonials</h2>
                <p>What our members are saying</p>
            </div>
            <div class="banner-slider">
                <div class="slide">
                    <div class="text-holder">
                        <p>Dramatically maintain clicks- and-mortar solutions without functional solutions.</p>
                        <p>Completely synerize resource taxing relationship via premier niche markets. Professionally cultivate.</p>
                    </div>
                    <div class="btn-holder">
                        <a href="#" class="btn">LARAATKINSON</a>
                    </div>
                </div>
                <div class="slide">
                    <div class="text-holder">
                        <p>Dramtically maintain clicks- and-mortar solutions without functgional solutions.</p>
                        <p>Completely synergize resource taxing relationship via premier niche markets. Professionally cultivate.</p>
                    </div>
                    <div class="btn-holder">
                        <a href="#" class="btn">LARAATKINSON</a>
                    </div>
                </div>
                <div class="slide">
                    <div class="text-holder">
                        <p>Dramtically maintain clicks- and-mortar solutions without functgional solutions.</p>
                        <p>Completely synergize resource taxing relationship via premier niche markets. Professionally cultivate.</p>
                    </div>
                    <div class="btn-holder">
                        <a href="#" class="btn">LARAATKINSON</a>
                    </div>
                </div>
                <div class="slide">
                    <div class="text-holder">
                        <p>Dramtically maintain clicks- and-mortar solutions without functgional solutions.</p>
                        <p>Completely synergize resource taxing relationship via premier niche markets. Professionally cultivate.</p>
                    </div>
                    <div class="btn-holder">
                        <a href="#" class="btn">LARAATKINSON</a>
                    </div>
                </div>
                <div class="slide">
                    <div class="text-holder">
                        <p>Dramtically maintain clicks- and-mortar solutions without functgional solutions.</p>
                        <p>Completely synergize resource taxing relationship via premier niche markets. Professionally cultivate.</p>
                    </div>
                    <div class="btn-holder">
                        <a href="#" class="btn">LARAATKINSON</a>
                    </div>
                </div>
                <div class="slide">
                    <div class="text-holder">
                        <p>Dramtically maintain clicks- and-mortar solutions without functgional solutions.</p>
                        <p>Completely synergize resource taxing relationship via premier niche markets. Professionally cultivate.</p>
                    </div>
                    <div class="btn-holder">
                        <a href="#" class="btn">LARAATKINSON</a>
                    </div>
                </div>
            </div>
        </div>
    </section>',
            'css' => '.testimonial-block {
  text-align: center;
  border-top: 1px solid rgba(0, 0, 0, 0.2);
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  padding: 40px 0 60px; }
  @media (max-width: 767px) {
    .testimonial-block {
      padding: 30px 0; } }
  .testimonial-block .container {
    max-width: 700px; }
  .testimonial-block .text-holder {
    color: #cf9742;
    font-size: 18px; }
    @media (max-width: 767px) {
      .testimonial-block .text-holder {
        font-size: 16px;
        line-height: 1; } }
  .testimonial-block h2 {
    font-size: 30px;
    line-height: 33px;
    margin: 0 0 10px;
    color: #89660b; }
    @media (max-width: 767px) {
      .testimonial-block h2 {
        font-size: 24px;
        line-height: 1;
        margin-bottom: 5px; } }
  .testimonial-block .btn {
    min-width: 160px; }
  @media (max-width: 1023px) {
    .testimonial-block .slick-list {
      padding: 0 80px !important; } }
  @media (max-width: 767px) {
    .testimonial-block .slick-list {
      padding: 0  !important; } }
  .testimonial-block .slide {
    border: 2px solid #cf9742;
    border-radius: 10px;
    position: relative; }
    .testimonial-block .slide.slick-active {
      margin: 0 0 30px; }
    .testimonial-block .slide .text-holder {
      color: #798da3;
      text-align: center;
      padding: 20px 20px 30px;
      font-size: 16px;
      line-height: 21px; }
    .testimonial-block .slide .btn-holder {
      position: absolute;
      bottom: -20px;
      right: 0;
      left: 0;
      content: ""; }
    .testimonial-block .slide .btn {
      font-size: 14px;
      padding: 7px 16px; }',
            'js' => '',
            'section_order' => 2,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
