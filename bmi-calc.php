<?php
/**
 * Plugin Name: BMI calculator
 * Author: Mihir
 * Version: 1.0.0
 * Description: A simple BMI calculator
 */

 if(!defined('ABSPATH'))
 {
    echo 'Cannot access this file.';
    exit;
 }
 if( !function_exists('add_action'))
 {
    echo 'Cannot access this file.';
    exit;
 }


 class bmiCalculator
 {
    public function __construct()
    {
        // Add assets(js, css)
        add_action('wp_enqueue_scripts', array($this, 'load_assets'));

        //Shortcode
        add_shortcode( 'bmi-layout', array($this, 'load_shortcode'));
        
    }

    public function load_assets()
    {
        wp_enqueue_script( 
            'bmi-calc', 
            plugin_dir_url( __FILE__ ) . 'Script/bmi-calc.js', 
            array('jquery'), 
            1, 
            true 
        );
        wp_enqueue_style( 
            'bmi-calc', 
            plugin_dir_url( __FILE__ ) . 'CSS/bmi-calc.css', 
            array(), 
            1, 
            'all' 
        );
    }

    public function load_shortcode()
    {?>
        <div class='main-container'>
            <h1 class="form-header">BMI CALCULATOR</h1>
            <div class="button">
                <button class="btn btn-primary btn-lg"> Metric </button>
            </div>
            <div class="input-grid">
                <div>
                    <input class="input" type="number" id="height" placeholder="Centimeters">
                </div>

                <div>
                    <input class="input" type="number" id="weight" placeholder="Kilograms">
                </div>
            </div>
            <div class="button">
                <button class="btn btn-primary btn-lg" onclick="getBmiValue()">CALCULATE</button>
            </div>

            <div class="output">
                 <input class="input" type="text" id="bmi-value" placeholder="Your BMI is...">
            </div>
        </div>
    <?php }

 }

new bmiCalculator;