function add_theme_caps() {
  add_role(
    'employee',
    __( 'Therichpost Employee' ),
    array(
      'read'           => true,  // true allows this capability
      'edit_posts'     => false,
      'delete_posts'   => false, // Use false to explicitly deny
      'manage_options' => false
    ) );
  // gets the author role
  $role = get_role( 'employee' );
       // add capability to the author role
  $role->add_cap( 'view_dashboard' );
}
add_action( 'admin_init', 'add_theme_caps' );
