<?php
/*
Plugin Name: Test Booking Dashboard
Description: Plugin to display test booking data in the WordPress admin dashboard.
Version: 1.0
Author: Your Name
*/

// Activation hook
register_activation_hook(__FILE__, 'test_booking_dashboard_activate');

function test_booking_dashboard_activate() {
    // Code to run on plugin activation
}

// Deactivation hook
register_deactivation_hook(__FILE__, 'test_booking_dashboard_deactivate');

function test_booking_dashboard_deactivate() {
    // Code to run on plugin deactivation
}

// Add menu item to the admin dashboard
add_action('admin_menu', 'test_booking_dashboard_menu');

function test_booking_dashboard_menu() {
    add_menu_page(
        'Test Booking Dashboard',
        'Test Booking',
        'manage_options',
        'test-booking-dashboard',
        'test_booking_dashboard_page'
    );
}

// Admin page content
function test_booking_dashboard_page() {
    ?>
    <div class="wrap">
        <h2>Test Booking Data</h2>

        <?php
        // Function to display test booking data
        display_test_booking_data();
        ?>
    </div>
    <?php
}

// Function to display test booking data
function display_test_booking_data() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'form_data'; // Adjust table name as per your setup

    $data = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");

    if (!empty($data)) {
        echo '<table class="wp-list-table widefat fixed striped">';
        echo '<thead><tr><th>Full Name</th><th>Email</th><th>Mobile Number</th><th>Location</th><th>Prescription File</th><th>Date Submitted</th></tr></thead>';
        echo '<tbody>';
        foreach ($data as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row->full_name) . '</td>';
            echo '<td>' . esc_html($row->email) . '</td>';
            echo '<td>' . esc_html($row->mobile_number) . '</td>';
            echo '<td>' . esc_html($row->location) . '</td>';
            echo '<td><a href="' . esc_url($row->prescription_file) . '" target="_blank">View File</a></td>';
            echo '<td>' . esc_html($row->submission_date) . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    } else {
        echo '<p>No test booking data found.</p>';
    }
}
?>
