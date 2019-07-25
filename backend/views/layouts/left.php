<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                  <p><?=Yii::$app->user->identity->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="搜索"/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => '主页', 'options' => ['class' => 'header']],
                    // ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    // ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                   
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                      ['label' => '审核', 'icon' => 'calendar-check-o',
                        'items' => [
                            ['label' => '管理员审核', 'icon' => 'star-half-empty', 'url' => ['/nku-student/nonadmin'],],
                            ['label' => '新闻审核', 'icon' => 'star-half-empty', 'url' => ['/nku-news/failed'],],
                        ],
                    ],
                    ['label' => '活动日程', 'icon' => 'calendar-check-o', 
                    'url' => ['/nku-activity'],
                    'items' => [
                    ['label' => '组织管理', 'icon' => 'star-half-empty', 'url' => ['/undertaken-byorgani'],],
                    ['label' => '学院承办', 'icon' => 'star-half-empty', 'url' => ['/undertaken-bycollege'],],
                    ['label' => '志愿者管理', 'icon' => 'star-half-empty', 'url' => ['/join-volunteer'],],
                    ['label' => '教师管理', 'icon' => 'star-half-empty', 'url' => ['/join-teacher'],],
                    ['label' => '嘉宾管理', 'icon' => 'star-half-empty', 'url' => ['/join-guest'],],
                    ]
                    ],
                    ['label' => '人员管理', 'icon' => 'calendar-check-o',
                     'url' =>'#',  'items' => [
                     ['label' => '管理员信息', 'icon' => 'male', 'url' => ['/nku-admin'],],
                     ['label' => '校友信息', 'icon' => 'male', 'url' => ['/nku-alumni'],],
                     ['label' => '学院信息', 'icon' => 'male', 'url' => ['/nku-college'],],
                     ['label' => '领导信息', 'icon' => 'male', 'url' => ['/nku-leader'],],
                     ['label' => '嘉宾信息', 'icon' => 'male', 'url' => ['/nku-guest'],],
                     ['label' => '学生信息', 'icon' => 'male', 'url' => ['/nku-student'],],
                     ['label' => '老师信息', 'icon' => 'male', 'url' => ['/nku-teacher'],],
                     ['label' => '志愿者信息', 'icon' => 'male', 'url' => ['/nku-volunteer'],],
                     ['label' => '组织信息', 'icon' => 'male', 'url' => ['/nku-organization'],],
                        ['label' => '管理员审核', 'icon' => 'male', 'url' => ['/nku-student/nonadmin'],],
                     ]
                    ],
                    ['label' => '新闻管理', 'icon' => 'calendar-check-o',
                     'url' => ['/news'],
                     'items' => [
                        ['label' => '新闻首页', 'icon' => 'send', 'url' => ['/nku-news'],],
                        ['label' => '活动联系', 'icon' => 'send', 'url' => ['/associate-withactivity'],],
                         ['label' => '编辑关系', 'icon' => 'send', 'url' => ['/write-bystu'],],
                        ['label' => '审核关系', 'icon' => 'send', 'url' => ['/audit-byadmin'],],
                         ['label' => '审核', 'icon' => 'send', 'url' => ['nku-news/failed'],],
                        ]
                
                ],
                    ['label' => '学校简史', 'icon' => 'calendar-check-o', 
                    'url' => '#',
                    'items' => [
                        ['label' => '历史事件', 'icon' => 'book', 'url' => ['/nku-events'],],
                        ['label' => '校庆元素', 'icon' => 'book', 'url' => ['/nku-element'],],
                        
                        ]
                    ],
                    // [
                    //     'label' => 'Some tools',
                    //     'icon' => 'share',
                    //     'url' => '#',
                    //     'items' => [
                    //         ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                    //         ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                    //         [
                    //             'label' => 'Level One',
                    //             'icon' => 'circle-o',
                    //             'url' => '#',
                    //             'items' => [
                    //                 ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                    //                 [
                    //                     'label' => 'Level Two',
                    //                     'icon' => 'circle-o',
                    //                     'url' => '#',
                    //                     'items' => [
                    //                         ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                    //                         ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                    //                     ],
                    //                 ],
                    //             ],
                    //         ],
                    //     ],
                    // ],
                ],
            ]
        ) ?>

    </section>

</aside>
