<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'name'                         => 'Name',
            'name_helper'                  => ' ',
            'email'                        => 'Email',
            'email_helper'                 => ' ',
            'email_verified_at'            => 'Email verified at',
            'email_verified_at_helper'     => ' ',
            'password'                     => 'Password',
            'password_helper'              => ' ',
            'roles'                        => 'Roles',
            'roles_helper'                 => ' ',
            'remember_token'               => 'Remember Token',
            'remember_token_helper'        => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'two_factor'                   => 'Two-Factor Auth',
            'two_factor_helper'            => ' ',
            'two_factor_code'              => 'Two-factor code',
            'two_factor_code_helper'       => ' ',
            'two_factor_expires_at'        => 'Two-factor expires at',
            'two_factor_expires_at_helper' => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'productManagement' => [
        'title'          => 'Inventory',
        'title_singular' => 'Inventory',
    ],
    'productSetup' => [
        'title'          => 'Product Setup',
        'title_singular' => 'Product Setup',
    ],
    'productCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'productTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'product' => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Brand name',
            'name_helper'        => 'A product brand is required and recommended to be unique',
            'description'        => 'Description',
            'description_helper' => ' ',
            'category'           => 'Categories',
            'category_helper'    => ' ',
            'tag'                => 'Tags',
            'tag_helper'         => ' ',
            'mapmhitem'          => 'MAP-MH Item',
            'mapmhitem_helper'   => 'Set the product MAP-MH Item',
            'qty'                => 'Quantity',
            'qty_helper'         => ' ',
            'uom'                => 'Unit of Measurement',
            'uom_helper'         => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Title',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'alert_content'        => 'Alert Content',
            'alert_content_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'productUnitOfMeasurement' => [
        'title'          => 'Unit of Measurement',
        'title_singular' => 'Unit of Measurement',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'clientManagement' => [
        'title'          => 'Recepient Management',
        'title_singular' => 'Recepient Management',
    ],
    'region' => [
        'title'          => 'Recipient',
        'title_singular' => 'Recipient',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'has_poc'              => 'Required Point of Contacts?',
            'has_poc_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'client' => [
        'title'          => 'Point of Contacts',
        'title_singular' => 'Point of Contact',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'designation'       => 'Designation',
            'designation_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'contact_no'        => 'Contact No',
            'contact_no_helper' => ' ',
            'region'            => 'Affiliated Recipient',
            'region_helper'     => ' ',
        ],
    ],
    'mapmhItem' => [
        'title'          => 'MAP-MH Item',
        'title_singular' => 'MAP-MH Item',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'code'                => 'Code',
            'code_helper'         => ' ',
            'name'                => 'Item Description',
            'name_helper'         => ' ',
            'bid_quantity'        => 'Quantity',
            'bid_quantity_helper' => ' ',
            'uom'                 => 'Unit of Measurement',
            'uom_helper'          => ' ',
            'unit_price'          => 'Unit Price',
            'unit_price_helper'   => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'supplier' => [
        'title'          => 'Suppliers',
        'title_singular' => 'Supplier',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'productStock' => [
        'title'          => 'Stocks',
        'title_singular' => 'Stock',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'product'               => 'Product',
            'product_helper'        => ' ',
            'date_acquired'         => 'Date Acquired',
            'date_acquired_helper'  => ' ',
            'batch_no'              => 'Batch No',
            'batch_no_helper'       => ' ',
            'quantity'              => 'Quantity',
            'quantity_helper'       => ' ',
            'total_quantity'        => 'Total Quantity',
            'total_quantity_helper' => ' ',
            'expiry_date'           => 'Expiry Date',
            'expiry_date_helper'    => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'supplier'              => 'Supplier',
            'supplier_helper'       => ' ',
        ],
    ],
    'deliveryOrder' => [
        'title'          => 'Delivery Order',
        'title_singular' => 'Delivery Order',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'code'                      => 'Order No',
            'code_helper'               => ' ',
            'tracking_no'               => 'Tracking No',
            'tracking_no_helper'        => ' ',
            'region'                    => 'Recipient',
            'region_helper'             => 'Set the Delivery order recipient',
            'created_by'                => 'Prepared By',
            'created_by_helper'         => ' ',
            'remarks'                   => 'Remarks',
            'remarks_helper'            => ' ',
            'estimated_dispatch'        => 'Estimated Dispatch',
            'estimated_dispatch_helper' => ' ',
            'estimated_arrival'         => 'Estimated Arrival',
            'estimated_arrival_helper'  => ' ',
            'actual_dispatch'           => 'Actual Delivery Dispatch',
            'actual_dispatch_helper'    => ' ',
            'actual_arrival'            => 'Actual Delivery Arrival',
            'actual_arrival_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'status'                    => 'Status',
            'status_helper'             => ' ',
        ],
    ],
    'deliveryOrderProduct' => [
        'title'          => 'Delivery Order Product',
        'title_singular' => 'Delivery Order Product',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'product_stock'        => 'Product Stock',
            'product_stock_helper' => ' ',
            'quantity'             => 'Quantity',
            'quantity_helper'      => ' ',
            'unit_price'           => 'Unit Price',
            'unit_price_helper'    => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
];
