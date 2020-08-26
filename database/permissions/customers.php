<?php
use App\Models\Permission;

if ( defined( 'NEXO_CREATE_PERMISSIONS' ) ) {
    $customers                 =   new Permission;
    $customers->name           =   __( 'Create Customers' );
    $customers->namespace      =   'nexopos.create.customers';
    $customers->description    =   __( 'Let the user create customers.' );
    $customers->save();
    
    $customers                 =   new Permission;
    $customers->name           =   __( 'Delete Customers' );
    $customers->namespace      =   'nexopos.delete.customers';
    $customers->description    =   __( 'Let the user delete customers.' );
    $customers->save();
    
    $customers                 =   new Permission;
    $customers->name           =   __( 'Update Customers' );
    $customers->namespace      =   'nexopos.update.customers';
    $customers->description    =   __( 'Let the user update customers.' );
    $customers->save();
    
    $customers                 =   new Permission;
    $customers->name           =   __( 'Read Customers' );
    $customers->namespace      =   'nexopos.read.customers';
    $customers->description    =   __( 'Let the user read customers.' );
    $customers->save();

    $customers                 =   new Permission;
    $customers->name           =   __( 'Import Customers' );
    $customers->namespace      =   'nexopos.import.customers';
    $customers->description    =   __( 'Let the user import customers.' );
    $customers->save();
}
