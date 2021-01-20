<?php

use Illuminate\Database\Seeder;

class AuthRulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('auth_rules')->delete();
        
        \DB::table('auth_rules')->insert(array (
            0 => 
            array (
                'id' => 2,
                'api' => 'User',
                'url' => '',
                'icon' => 'user',
                'title' => '用户管理',
                'pid' => 0,
                'state' => 1,
                'sort' => 1,
            ),
            1 => 
            array (
                'id' => 6,
                'api' => 'AdministratorList',
                'url' => NULL,
                'icon' => '',
                'title' => '管理员管理',
                'pid' => 2,
                'state' => 1,
                'sort' => 0,
            ),
            2 => 
            array (
                'id' => 7,
                'api' => 'CreateAdmin',
                'url' => NULL,
                'icon' => '',
                'title' => '添加管理员',
                'pid' => 6,
                'state' => 0,
                'sort' => 0,
            ),
            3 => 
            array (
                'id' => 8,
                'api' => 'UpdataAdmin',
                'url' => NULL,
                'icon' => '',
                'title' => '修改管理员',
                'pid' => 6,
                'state' => 0,
                'sort' => 0,
            ),
            4 => 
            array (
                'id' => 9,
                'api' => 'DeleteAdmin',
                'url' => NULL,
                'icon' => '',
                'title' => '删除管理员',
                'pid' => 6,
                'state' => 0,
                'sort' => 0,
            ),
            5 => 
            array (
                'id' => 10,
                'api' => 'UsersList',
                'url' => NULL,
                'icon' => '',
                'title' => '用户列表',
                'pid' => 2,
                'state' => 1,
                'sort' => 1,
            ),
            6 => 
            array (
                'id' => 15,
                'api' => 'ManageList',
                'url' => NULL,
                'icon' => '',
                'title' => '管理组管理',
                'pid' => 2,
                'state' => 1,
                'sort' => 2,
            ),
            7 => 
            array (
                'id' => 16,
                'api' => 'CreateManage',
                'url' => NULL,
                'icon' => '',
                'title' => '添加管理组',
                'pid' => 15,
                'state' => 0,
                'sort' => 0,
            ),
            8 => 
            array (
                'id' => 17,
                'api' => 'UpdataManage',
                'url' => NULL,
                'icon' => '',
                'title' => '修改管理组',
                'pid' => 15,
                'state' => 0,
                'sort' => 0,
            ),
            9 => 
            array (
                'id' => 18,
                'api' => 'DeleteManage',
                'url' => NULL,
                'icon' => '',
                'title' => '删除管理组',
                'pid' => 15,
                'state' => 0,
                'sort' => 0,
            ),
            10 => 
            array (
                'id' => 19,
                'api' => 'PowerList',
                'url' => NULL,
                'icon' => '',
                'title' => '权限管理',
                'pid' => 2,
                'state' => 1,
                'sort' => 3,
            ),
            11 => 
            array (
                'id' => 20,
                'api' => 'CreatePower',
                'url' => NULL,
                'icon' => '',
                'title' => '添加权限',
                'pid' => 19,
                'state' => 0,
                'sort' => 0,
            ),
            12 => 
            array (
                'id' => 21,
                'api' => 'UpdataPower',
                'url' => NULL,
                'icon' => '',
                'title' => '修改权限',
                'pid' => 19,
                'state' => 0,
                'sort' => 0,
            ),
            13 => 
            array (
                'id' => 22,
                'api' => 'DeletePower',
                'url' => NULL,
                'icon' => '',
                'title' => '删除权限',
                'pid' => 19,
                'state' => 0,
                'sort' => 0,
            ),
            14 => 
            array (
                'id' => 23,
                'api' => 'Tool',
                'url' => '',
                'icon' => 'tool',
                'title' => '工具',
                'pid' => 0,
                'state' => 1,
                'sort' => 1,
            ),
            15 => 
            array (
                'id' => 29,
                'api' => 'GoodsManage',
                'url' => '',
                'icon' => 'goods',
                'title' => '商品管理',
                'pid' => 0,
                'state' => 1,
                'sort' => 0,
            ),
            16 => 
            array (
                'id' => 60,
                'api' => 'RedisServices',
                'url' => '',
                'icon' => '',
                'title' => 'Redis管理',
                'pid' => 23,
                'state' => 1,
                'sort' => 0,
            ),
            17 => 
            array (
                'id' => 61,
                'api' => 'RedisServicesList',
                'url' => '',
                'icon' => '',
                'title' => 'Redis列表',
                'pid' => 60,
                'state' => 1,
                'sort' => 0,
            ),
            18 => 
            array (
                'id' => 62,
                'api' => 'DeleteRedisServices',
                'url' => '',
                'icon' => '',
                'title' => '删除Redis',
                'pid' => 60,
                'state' => 0,
                'sort' => 0,
            ),
            19 => 
            array (
                'id' => 63,
                'api' => 'RedisPanel',
                'url' => '',
                'icon' => '',
                'title' => 'Redis面板',
                'pid' => 60,
                'state' => 1,
                'sort' => 0,
            ),
            20 => 
            array (
                'id' => 90,
                'api' => 'Brand',
                'url' => '',
                'icon' => '',
                'title' => '品牌',
                'pid' => 29,
                'state' => 1,
                'sort' => 1,
            ),
            21 => 
            array (
                'id' => 91,
                'api' => 'BrandList',
                'url' => '',
                'icon' => '',
                'title' => '品牌列表',
                'pid' => 90,
                'state' => 1,
                'sort' => 0,
            ),
            22 => 
            array (
                'id' => 92,
                'api' => 'CreateBrand',
                'url' => '',
                'icon' => '',
                'title' => '添加品牌',
                'pid' => 90,
                'state' => 0,
                'sort' => 0,
            ),
            23 => 
            array (
                'id' => 93,
                'api' => 'EditBrand',
                'url' => '',
                'icon' => '',
                'title' => '编辑品牌',
                'pid' => 90,
                'state' => 0,
                'sort' => 0,
            ),
            24 => 
            array (
                'id' => 94,
                'api' => 'DeleteBrand',
                'url' => '',
                'icon' => '',
                'title' => '品牌删除',
                'pid' => 90,
                'state' => 0,
                'sort' => 0,
            ),
            25 => 
            array (
                'id' => 95,
                'api' => 'Category',
                'url' => '',
                'icon' => '',
                'title' => '分类',
                'pid' => 29,
                'state' => 1,
                'sort' => 1,
            ),
            26 => 
            array (
                'id' => 96,
                'api' => 'CategoryList',
                'url' => '',
                'icon' => '',
                'title' => '分类列表',
                'pid' => 95,
                'state' => 1,
                'sort' => 0,
            ),
            27 => 
            array (
                'id' => 97,
                'api' => 'CreateCategory',
                'url' => '',
                'icon' => '',
                'title' => '添加分类',
                'pid' => 95,
                'state' => 0,
                'sort' => 0,
            ),
            28 => 
            array (
                'id' => 98,
                'api' => 'EditCategory',
                'url' => '',
                'icon' => '',
                'title' => '编辑分类',
                'pid' => 95,
                'state' => 0,
                'sort' => 0,
            ),
            29 => 
            array (
                'id' => 99,
                'api' => 'DeleteCategory',
                'url' => '',
                'icon' => '',
                'title' => '分类删除',
                'pid' => 95,
                'state' => 0,
                'sort' => 0,
            ),
            30 => 
            array (
                'id' => 100,
                'api' => 'ResourceData',
                'url' => '',
                'icon' => '',
                'title' => '资源',
                'pid' => 23,
                'state' => 1,
                'sort' => 0,
            ),
            31 => 
            array (
                'id' => 101,
                'api' => 'ResourceDataList',
                'url' => '',
                'icon' => '',
                'title' => '资源列表',
                'pid' => 100,
                'state' => 1,
                'sort' => 0,
            ),
            32 => 
            array (
                'id' => 102,
                'api' => 'CreateResourceData',
                'url' => '',
                'icon' => '',
                'title' => '添加资源',
                'pid' => 100,
                'state' => 0,
                'sort' => 0,
            ),
            33 => 
            array (
                'id' => 103,
                'api' => 'EditResourceData',
                'url' => '',
                'icon' => '',
                'title' => '编辑资源',
                'pid' => 100,
                'state' => 0,
                'sort' => 0,
            ),
            34 => 
            array (
                'id' => 104,
                'api' => 'DeleteResourceData',
                'url' => '',
                'icon' => '',
                'title' => '资源删除',
                'pid' => 100,
                'state' => 0,
                'sort' => 0,
            ),
            35 => 
            array (
                'id' => 105,
                'api' => 'Specification',
                'url' => '',
                'icon' => '',
                'title' => '规格',
                'pid' => 29,
                'state' => 1,
                'sort' => 1,
            ),
            36 => 
            array (
                'id' => 106,
                'api' => 'SpecificationList',
                'url' => '',
                'icon' => '',
                'title' => '规格列表',
                'pid' => 105,
                'state' => 1,
                'sort' => 0,
            ),
            37 => 
            array (
                'id' => 107,
                'api' => 'CreateSpecification',
                'url' => '',
                'icon' => '',
                'title' => '添加规格',
                'pid' => 105,
                'state' => 0,
                'sort' => 0,
            ),
            38 => 
            array (
                'id' => 108,
                'api' => 'EditSpecification',
                'url' => '',
                'icon' => '',
                'title' => '编辑规格',
                'pid' => 105,
                'state' => 0,
                'sort' => 0,
            ),
            39 => 
            array (
                'id' => 109,
                'api' => 'DeleteSpecification',
                'url' => '',
                'icon' => '',
                'title' => '规格删除',
                'pid' => 105,
                'state' => 0,
                'sort' => 0,
            ),
            40 => 
            array (
                'id' => 110,
                'api' => 'SpecificationGroup',
                'url' => '',
                'icon' => '',
                'title' => '规格组',
                'pid' => 29,
                'state' => 1,
                'sort' => 1,
            ),
            41 => 
            array (
                'id' => 111,
                'api' => 'SpecificationGroupList',
                'url' => '',
                'icon' => '',
                'title' => '规格组列表',
                'pid' => 110,
                'state' => 1,
                'sort' => 0,
            ),
            42 => 
            array (
                'id' => 112,
                'api' => 'CreateSpecificationGroup',
                'url' => '',
                'icon' => '',
                'title' => '添加规格组',
                'pid' => 110,
                'state' => 0,
                'sort' => 0,
            ),
            43 => 
            array (
                'id' => 113,
                'api' => 'EditSpecificationGroup',
                'url' => '',
                'icon' => '',
                'title' => '编辑规格组',
                'pid' => 110,
                'state' => 0,
                'sort' => 0,
            ),
            44 => 
            array (
                'id' => 114,
                'api' => 'DeleteSpecificationGroup',
                'url' => '',
                'icon' => '',
                'title' => '规格组删除',
                'pid' => 110,
                'state' => 0,
                'sort' => 0,
            ),
            45 => 
            array (
                'id' => 116,
                'api' => 'Product',
                'url' => '',
                'icon' => '',
                'title' => '商品',
                'pid' => 29,
                'state' => 1,
                'sort' => 0,
            ),
            46 => 
            array (
                'id' => 117,
                'api' => 'ProductList',
                'url' => '',
                'icon' => '',
                'title' => '商品列表',
                'pid' => 116,
                'state' => 1,
                'sort' => 0,
            ),
            47 => 
            array (
                'id' => 118,
                'api' => 'CreateProduct',
                'url' => '',
                'icon' => '',
                'title' => '添加商品',
                'pid' => 116,
                'state' => 0,
                'sort' => 0,
            ),
            48 => 
            array (
                'id' => 119,
                'api' => 'EditProduct',
                'url' => '',
                'icon' => '',
                'title' => '编辑商品',
                'pid' => 116,
                'state' => 0,
                'sort' => 0,
            ),
            49 => 
            array (
                'id' => 120,
                'api' => 'DeleteProduct',
                'url' => '',
                'icon' => '',
                'title' => '商品删除',
                'pid' => 116,
                'state' => 0,
                'sort' => 0,
            ),
            50 => 
            array (
                'id' => 121,
                'api' => 'Logistics',
                'url' => '',
                'icon' => 'logistics',
                'title' => '物流管理',
                'pid' => 0,
                'state' => 1,
                'sort' => 0,
            ),
            51 => 
            array (
                'id' => 122,
                'api' => 'freightList',
                'url' => '',
                'icon' => '',
                'title' => '运费模板',
                'pid' => 121,
                'state' => 1,
                'sort' => 0,
            ),
            52 => 
            array (
                'id' => 123,
                'api' => 'CreateFreight',
                'url' => '',
                'icon' => '',
                'title' => '添加运费模板',
                'pid' => 121,
                'state' => 0,
                'sort' => 0,
            ),
            53 => 
            array (
                'id' => 124,
                'api' => 'EditFreight',
                'url' => '',
                'icon' => '',
                'title' => '编辑运费模板',
                'pid' => 121,
                'state' => 0,
                'sort' => 0,
            ),
            54 => 
            array (
                'id' => 125,
                'api' => 'DeleteFreight',
                'url' => '',
                'icon' => '',
                'title' => '删除运费模板',
                'pid' => 121,
                'state' => 0,
                'sort' => 0,
            ),
            55 => 
            array (
                'id' => 126,
                'api' => 'shipment',
                'url' => '',
                'icon' => '',
                'title' => '发货',
                'pid' => 127,
                'state' => 0,
                'sort' => 0,
            ),
            56 => 
            array (
                'id' => 127,
                'api' => 'Indent',
                'url' => '',
                'icon' => 'Indent',
                'title' => '订单管理',
                'pid' => 0,
                'state' => 1,
                'sort' => 0,
            ),
            57 => 
            array (
                'id' => 128,
                'api' => 'indentList',
                'url' => '',
                'icon' => '',
                'title' => '订单列表',
                'pid' => 127,
                'state' => 1,
                'sort' => 0,
            ),
            58 => 
            array (
                'id' => 129,
                'api' => 'dhlList',
                'url' => '',
                'icon' => '',
                'title' => '快递公司',
                'pid' => 121,
                'state' => 1,
                'sort' => 0,
            ),
            59 => 
            array (
                'id' => 130,
                'api' => 'CreateDhl',
                'url' => '',
                'icon' => '',
                'title' => '添加快递公司',
                'pid' => 121,
                'state' => 0,
                'sort' => 0,
            ),
            60 => 
            array (
                'id' => 131,
                'api' => 'EditDhl',
                'url' => '',
                'icon' => '',
                'title' => '编辑快递公司',
                'pid' => 121,
                'state' => 0,
                'sort' => 0,
            ),
            61 => 
            array (
                'id' => 132,
                'api' => 'DeleteDhl',
                'url' => '',
                'icon' => '',
                'title' => '删除快递公司',
                'pid' => 121,
                'state' => 0,
                'sort' => 0,
            ),
            62 => 
            array (
                'id' => 133,
                'api' => 'EditIndent',
                'url' => '',
                'icon' => '',
                'title' => '订单详情',
                'pid' => 127,
                'state' => 0,
                'sort' => 0,
            ),
            63 => 
            array (
                'id' => 134,
                'api' => 'Browse',
                'url' => '',
                'icon' => '',
                'title' => '浏览记录',
                'pid' => 29,
                'state' => 0,
                'sort' => 0,
            ),
            64 => 
            array (
                'id' => 135,
                'api' => 'Collect',
                'url' => '',
                'icon' => '',
                'title' => '收藏',
                'pid' => 29,
                'state' => 0,
                'sort' => 0,
            ),
            65 => 
            array (
                'id' => 136,
                'api' => 'CollectList',
                'url' => '',
                'icon' => '',
                'title' => '收藏列表',
                'pid' => 135,
                'state' => 0,
                'sort' => 0,
            ),
            66 => 
            array (
                'id' => 137,
                'api' => 'CreateCollect',
                'url' => '',
                'icon' => '',
                'title' => '添加收藏',
                'pid' => 135,
                'state' => 0,
                'sort' => 0,
            ),
            67 => 
            array (
                'id' => 138,
                'api' => 'DeleteCollect',
                'url' => '',
                'icon' => '',
                'title' => '收藏删除',
                'pid' => 135,
                'state' => 0,
                'sort' => 0,
            ),
            68 => 
            array (
                'id' => 139,
                'api' => 'BrowseList',
                'url' => '',
                'icon' => '',
                'title' => '浏览列表',
                'pid' => 134,
                'state' => 0,
                'sort' => 0,
            ),
            69 => 
            array (
                'id' => 140,
                'api' => 'CreateBrowse',
                'url' => '',
                'icon' => '',
                'title' => '添加浏览记录',
                'pid' => 134,
                'state' => 0,
                'sort' => 0,
            ),
            70 => 
            array (
                'id' => 141,
                'api' => 'DetailsCollect',
                'url' => '',
                'icon' => '',
                'title' => '收藏详情',
                'pid' => 135,
                'state' => 0,
                'sort' => 0,
            ),
            71 => 
            array (
                'id' => 142,
                'api' => 'Banner',
                'url' => '',
                'icon' => '',
                'title' => '轮播管理',
                'pid' => 23,
                'state' => 1,
                'sort' => 0,
            ),
            72 => 
            array (
                'id' => 143,
                'api' => 'BannerList',
                'url' => '',
                'icon' => '',
                'title' => '轮播列表',
                'pid' => 142,
                'state' => 1,
                'sort' => 0,
            ),
            73 => 
            array (
                'id' => 144,
                'api' => 'CreateBanner',
                'url' => '',
                'icon' => '',
                'title' => '添加轮播',
                'pid' => 142,
                'state' => 0,
                'sort' => 0,
            ),
            74 => 
            array (
                'id' => 145,
                'api' => 'EditBanner',
                'url' => '',
                'icon' => '',
                'title' => '编辑轮播',
                'pid' => 142,
                'state' => 0,
                'sort' => 0,
            ),
            75 => 
            array (
                'id' => 147,
                'api' => 'DeleteBanner',
                'url' => '',
                'icon' => '',
                'title' => '轮播删除',
                'pid' => 142,
                'state' => 0,
                'sort' => 0,
            ),
            76 => 
            array (
                'id' => 148,
                'api' => 'refund',
                'url' => '',
                'icon' => '',
                'title' => '退款',
                'pid' => 127,
                'state' => 0,
                'sort' => 0,
            ),
            77 => 
            array (
                'id' => 149,
                'api' => 'Statistics',
                'url' => '',
                'icon' => 'statistics',
                'title' => '统计',
                'pid' => 0,
                'state' => 1,
                'sort' => 0,
            ),
            78 => 
            array (
                'id' => 150,
                'api' => 'StatisticsVisit',
                'url' => '',
                'icon' => '',
                'title' => '使用分析',
                'pid' => 149,
                'state' => 1,
                'sort' => 0,
            ),
            79 => 
            array (
                'id' => 151,
                'api' => 'StatisticsPay',
                'url' => '',
                'icon' => '',
                'title' => '交易分析',
                'pid' => 149,
                'state' => 1,
                'sort' => 0,
            ),
            80 => 
            array (
                'id' => 152,
                'api' => 'StatisticsAgeAndSex',
                'url' => '',
                'icon' => '',
                'title' => '用户画像',
                'pid' => 149,
                'state' => 1,
                'sort' => 0,
            ),
            81 => 
            array (
                'id' => 154,
                'api' => 'CreateUser',
                'url' => '',
                'icon' => '',
                'title' => '添加用户',
                'pid' => 10,
                'state' => 0,
                'sort' => 0,
            ),
            82 => 
            array (
                'id' => 155,
                'api' => 'UpdataUser',
                'url' => '',
                'icon' => '',
                'title' => '修改用户',
                'pid' => 10,
                'state' => 0,
                'sort' => 0,
            ),
            83 => 
            array (
                'id' => 156,
                'api' => 'PlugIn',
                'url' => '',
                'icon' => 'plug-in',
                'title' => '插件',
                'pid' => 0,
                'state' => 1,
                'sort' => 1,
            ),
            84 => 
            array (
                'id' => 157,
                'api' => 'PlugInList',
                'url' => '',
                'icon' => '',
                'title' => '插件列表',
                'pid' => 156,
                'state' => 1,
                'sort' => 0,
            ),
            85 => 
            array (
                'id' => 158,
                'api' => 'PlugInUpdate',
                'url' => '',
                'icon' => '',
                'title' => '更新插件',
                'pid' => 156,
                'state' => 0,
                'sort' => 0,
            ),
            86 => 
            array (
                'id' => 159,
                'api' => 'PlugInInstall',
                'url' => '',
                'icon' => '',
                'title' => '安装插件',
                'pid' => 156,
                'state' => 0,
                'sort' => 0,
            ),
        ));
        
        
    }
}