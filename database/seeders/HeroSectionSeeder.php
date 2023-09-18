<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('website_sections')->insert([
            'heading' => 'SOMETHING COOL TO SAY',
            'sub_heading' => 'Something interesting',
            'html' => '<section class="hero-block">
                            <div class="container">
                                <div class="text-holder">
                                    <h1>SOMETHING COOL TO SAY</h1>
                                    <p>Something interesting</p>
                                    <div class="btn-holder">
                                        <a href="#payment-block" class="btn">Become a member</a>
                                    </div>
                                </div>
                                <div class="image-holder">
                                    <img src="images\img2.png" alt="image-description">
                                </div>
                            </div>
                        </section>',
            'css' => '.hero-block {
  padding: 40px 0; }
  @media (max-width: 767px) {
    .hero-block {
      padding: 0; } }
  .hero-block .container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between; }
    @media (max-width: 767px) {
      .hero-block .container {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap; } }
  .hero-block .text-holder {
    width: 40%;
    color: #798da3;
    font-size: 20px; }
    @media (max-width: 767px) {
      .hero-block .text-holder {
        width: 100%;
        margin-bottom: 20px;
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2;
        font-size: 14px; } }
  .hero-block h1 {
    font-size: 40px;
    line-height: 48px;
    font-weight: 700;
    color: #3b4754;
    margin-bottom: 20px; }
    @media (max-width: 1023px) {
      .hero-block h1 {
        font-size: 30px;
        line-height: 34px;
        margin-bottom: 10px; } }
    @media (max-width: 767px) {
      .hero-block h1 {
        font-size: 18px;
        line-height: 21px;
        line-height: 1; } }
  .hero-block p {
    margin: 0;
    line-height: 1; }
  .hero-block .btn-holder {
    padding-top: 100px; }
    @media (max-width: 767px) {
      .hero-block .btn-holder {
        padding-top: 20px; } }
  .hero-block .btn {
    border-radius: 50px;
    min-width: 247px; }
    @media (max-width: 767px) {
      .hero-block .btn {
        min-width: 160px;
        font-size: 12px; } }
  .hero-block .image-holder {
    width: 50%; }
    @media (max-width: 767px) {
      .hero-block .image-holder {
        width: 100%;
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1;
        margin-bottom: 20px; } }
    .hero-block .image-holder img {
      width: 100%; }',
            'js' => '',
            'section_order' => 1,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
