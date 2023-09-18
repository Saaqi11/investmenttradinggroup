<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenefitBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('website_sections')->insert([
            'heading' => 'Monthly, NO lock in - Maximum flexibility',
            'sub_heading' => '',
            'html' => '<section class="benefit-block">
                            <div class="container">
                                <div class="text-area">
                                    <h3>Monthly, NO lock in - Maximum flexibility</h3>
                                </div>
                                <div class="three-col">
                                    <div class="col">
                                        <div class="image-holder">
                                            <img src="images/img-recommendation.jpg" alt="image-description">
                                        </div>
                                        <div class="text-holder">
                                            <h4>Benefit 1</h4>
                                            <p>Writing about benefit 1</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="image-holder">
                                            <img src="images/img-recommendation.jpg" alt="image-description">
                                        </div>
                                        <div class="text-holder">
                                            <h4>Benefit 2</h4>
                                            <p>Writing about benefit 2</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="image-holder">
                                            <img src="images/img-recommendation.jpg" alt="image-description">
                                        </div>
                                        <div class="text-holder">
                                            <h4>Benefit 3</h4>
                                            <p>Writing about benefit 3</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-holder">
                                    <a href="#" class="btn">Get started</a>
                                </div>
                            </div>
                        </section>',
            'css' => '.benefit-block {
  padding: 40px 0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  border-top: 1px solid rgba(0, 0, 0, 0.2); }
  @media (max-width: 767px) {
    .benefit-block {
      padding: 30px 0; } }
  .benefit-block .text-area {
    text-align: center; }
    .benefit-block .text-area h3 {
      color: #3b4754;
      margin: 0 0 40px;
      font-size: 36px;
      line-height: 1; }
      @media (max-width: 767px) {
        .benefit-block .text-area h3 {
          font-size: 18px;
          line-height: 21px;
          margin: 0 0 20px; } }
  .benefit-block .three-col {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin: 0 -20px; }
    @media (max-width: 767px) {
      .benefit-block .three-col {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap; } }
    .benefit-block .three-col .col {
      width: 33.333%;
      padding: 0 20px; }
      @media (max-width: 767px) {
        .benefit-block .three-col .col {
          width: 100%;
          margin-bottom: 20px; } }
    .benefit-block .three-col .image-holder {
      margin: 0 0 20px; }
      @media (max-width: 767px) {
        .benefit-block .three-col .image-holder {
          margin: 0 0 10px; } }
      .benefit-block .three-col .image-holder img {
        width: 100%; }
    @media (max-width: 767px) {
      .benefit-block .three-col .text-holder {
        font-size: 14px;
        line-height: 1; } }
    .benefit-block .three-col .text-holder h4 {
      font-size: 20px;
      margin: 0 0 10px;
      list-style: 1;
      color: #3b4754; }
      @media (max-width: 767px) {
        .benefit-block .three-col .text-holder h4 {
          margin: 0 0 5px;
          line-height: 1; } }
  .benefit-block .btn-holder {
    text-align: center;
    padding: 30px 0 0; }
    @media (max-width: 767px) {
      .benefit-block .btn-holder {
        padding: 0; } }
    .benefit-block .btn-holder .btn {
      width: 242px;
      border-radius: 30px;
      padding: 7px 12px; }',
            'js' => '',
            'section_order' => 4,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
