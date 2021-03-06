<?php
return [
    'labels' => [
        'title' => '配件',
        'description' => '主数据列表',
        'records' => '配件',
        'Category' => '分类',
        'Vendor' => '厂商',
        'Purchased Channel' => '购入途径',
        'Depreciation Rule' => '折旧规则',
        'Location Help' => '记录存放位置，例如某个货架、某个抽屉。',
        'Batch Delete' => '批量删除配件',
        'Batch Delete Confirm' => '您确定要删除选中的配件吗？',
        'Batch Delete Success' => '批量删除配件成功！',
        'Delete' => '删除配件',
        'Delete Success' => '成功删除配件！',
        'Delete Confirm' => '确认删除？',
        'Delete Confirm Description' => '删除的同时将会解除所有与之关联的归属关系',
        'Track Create Update' => '归属设备',
        'Import' => '导入',
        'File Help' => '导入支持xls、xlsx、csv文件，且表格头必填栏位【名称、分类、规格、厂商】，支持咖啡壶导出的Excel文件直接导入。',
        'Device Help' => '选择新设备后，将会自动解除此配件与老设备的归属关系。',
        'Maintenance Create' => '报告故障'
    ],
    'fields' => [
        'qrcode' => '二维码',
        'name' => '名称',
        'description' => '描述',
        'category' => [
            'name' => '分类'
        ],
        'vendor' => [
            'name' => '厂商'
        ],
        'channel' => [
            'name' => '购入途径'
        ],
        'device' => [
            'name' => '所属设备'
        ],
        'specification' => '规格',
        'sn' => '序列号',
        'price' => '价格',
        'purchased' => '购入日期',
        'expired' => '过保日期',
        'depreciation' => [
            'name' => '折旧规则',
            'termination' => '报废日期'
        ],
        'asset_number' => '资产编号',
        'location' => '位置',
        'expiration_left_days' => '剩余保固时间',
        'category_id' => '分类',
        'vendor_id' => '厂商',
        'depreciation_id' => '折旧规则',
        'extended_fields' => '自定义信息',
        'file' => '文件',
        'device_id' => '设备',
        'ng_description' => '故障说明',
        'ng_time' => '故障发生时间',
    ]
];
