<?php
/**
 * Plugin Name: Style plugin
 * Plugin URI: https://mutambaabuid.com
 * Description: Learning WordPress plugin styling.
 * Requires at least: 6.2
 * Requires PHP: 7.0
 * Version: 1.0.0
 * Author: Abudi 
 * Text Domain: abudi
 * Domain Path: /languages/
 *
 * @package abudi
 */


add_action( 'admin_menu', 'pdev_styling_create_menu' );

function pdev_styling_create_menu () {

    // Create custom top-level menu
    add_menu_page( 'Testing Plugin Styles', 'Plugin Styling', 'manage_options', __FILE__, 'pdev_styling_settings' );

}


function pdev_styling_settings() {

    ?>
        <div class="wrap">
            <h1>My plugin</h1>
            <h2>My plugin</h2>
            <h3>My plugin</h3>
            <h4>My plugin</h4>
            <h5>My plugin</h5>
            <h6>My plugin</h6>

            <h1><span class="dashicons dashicons-smiley"></span> My Plugin</h1>
            <h2><span class="dashicons dashicons-visibility"></span> My Plugin</h2> 
            <h3><span class="dashicons dashicons-universal-access"></span> My Plugin</h3> 
            <h4><span class="dashicons dashicons-buddicons-replies"></span> My Plugin</h4> 
            <h5><span class="dashicons dashicons-businesswoman"></span> My Plugins</h5>
            <h6><span class="dashicons dashicons-thumbs-up"></span> My Plugin</h6>
            
            <div class="notice notice-error is-dismissible"> <p>There has been an error.</p> </div>
            <div class="notice notice-warning is-dismissible"> <p>This is a warning message.</p> </div>
            <div class="notice notice-success is-dismissible"> <p>This is a success message.</p> </div>
            <div class="notice notice-info is-dismissible"> <p>This is some information.</p> </div>

            <p>
                <input type="submit" name="Save" value="Save Options"/> 
                <input type="submit" name="Save" value="Save Options"class="button-primary"/> </p>
            <p>
                <input type="submit" name="Secondary" value="Secondary Button"/> 
                <input type="submit" name="Secondary" value="Secondary Button" class="button-secondary"/>
            </p>
            
            <a href="#">Search</a>
            <a href="#" class="button-primary">Search Primary</a>
            <a href="#" class="button-secondary">Search Secondary</a>

        </div>

        <div class="wrap">
            <?php screen_icon( 'plugins' ); ?> <h2>My Plugin</h2>
            <form method="POST" action=""> <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="fname">First Name</label></th>
                <td><input maxlength="45" size="25" name="fname"/></td> 
            </tr>           
            <tr valign="top">
                <th scope="row"><label for="lname">Last Name</label></th> 
                <td><input id="lname" maxlength="45" size="25" name="lname"/></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="color">Favorite Color</label></th> 
                <td>
                    <select name="color">
                        <option value="orange">Orange</option> 
                        <option value="black">Black</option>
                    </select>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="featured">Featured?</label></th>
                <td><input type="checkbox" name="favorite"/></td> 
            </tr>
            <tr valign="top">
                <th scope="row"><label for="gender">Gender</label></th> 
                <td>
                    <input type="radio" name="gender" value="male"/> Male
                    <input type="radio" name="gender" value="female"/> Female 
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="bio">Bio</label></th>
                <td><textarea name="bio"></textarea></td> </tr>
            <tr valign="top"> 
                <td>
                    <input type="submit" name="save" value="Save Options" class="button-primary"/>
                    <input type="submit" name="reset" value="Reset" class="button-secondary"/>
                </td> 
            </tr>
            </table>
            </form>
        </div>

        <div class="wrap">
            <table class="widefat"> 
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Favorite Holiday</th> 
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Favorite Holiday</th> 
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Brad Williams</td> 
                    <td>Halloween</td>
                </tr> 
                <tr>
                    <td>Ozh Richard</td>
                    <td>Talk Like a Pirate</td> 
                </tr>
                <tr>
                    <td>Justin Tadlock</td> 
                    <td>Christmas</td>
                </tr>
            </tbody>
            </table>
        </div>

        <div class="tablenav">
            <div class="tablenav-pages">
                <span class="displaying-num">Displaying 1-20 of 69</span>
                <span class="page-numbers current">1</span> <a href="#" class="page-numbers">2</a>
                <a href="#" class="page-numbers">3</a>
                <a href="#" class="page-numbers">4</a>
                <a href="#" class="next page-numbers">&raquo;</a> 
            </div>
        </div>  
    <?php

    
}

add_action( 'wp_enqueue_scripts', 'pdev_load_dashicons_front_end' );

function pdev_load_dashicons_front_end() {

    wp_enqueue_style( 'dashicons' );
}