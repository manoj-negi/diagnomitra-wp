<?php
/* Template Name: Test Email */

get_header();

if (wp_mail(get_option('admin_email'), 'Test Email', 'This is a test email.')) {
    echo 'Email sent successfully.';
} else {
    echo 'Failed to send email.';
}

get_footer();
