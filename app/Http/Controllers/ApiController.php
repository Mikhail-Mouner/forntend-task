<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Return Home Api (Features)
     */
    public function home()
    {

        $featuresList = [

            [
                'name' => 'Fully Responsive',
                'description' => 'It is a long established fact that a reader will be distracted by the when looking at its layout.'

            ],
            [
                'name' => 'Fresh Layouts',
                'description' => 'It is a long established fact that a reader will be distracted by the when looking at its layout.'

            ],
            [
                'name' => 'Minimalism Feast',
                'description' => 'It is a long established fact that a reader will be distracted by the when looking at its layout.'

            ],
            [
                'name' => 'Modern Workflow',
                'description' => 'It is a long established fact that a reader will be distracted by the when looking at its layout.'

            ],
            [
                'name' => 'Unique Features',
                'description' => 'It is a long established fact that a reader will be distracted by the when looking at its layout.'

            ],
            [
                'name' => 'Support 24/7',
                'description' => 'It is a long established fact that a reader will be distracted by the when looking at its layout.'

            ]

        ];

        $teamMembers=[
            [
                'name'=>'Pauline I. Bird',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar7.png',
                'title'=>'Web developer',
            ],
            [
                'name'=>'Ralph L. Alva',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar1.png',
                'title'=>'UI Developer',
            ],
            [
                'name'=>'John B. Roman',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar6.png',
                'title'=>'Graphic Designer',
            ],
            [
                'name'=>'David O. Buckley',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar2.png',
                'title'=>'Android Developer',
            ]
        ];
        return response()->json(['features' => $featuresList, 'teamMembers' => $teamMembers, 'success' => true]);
    }

    /**
     * Return Stories Api
     */
    public function stories()
    {

        $user = [
            'name' => 'jonh Doe',
            'avatar' => 'https://bootdey.com/img/Content/avatar/avatar7.png',
        ];
        $members = [
            'recently_added' => [

                [
                    'name' => 'Katharina Nielsen',
                    'avatar' => 'https://bootdey.com/img/Content/avatar/avatar6.png',
                    'last_activity' => 'Today, 12:33'
                ],
                [
                    'name' => 'Katharina Nielsen',
                    'avatar' => 'https://bootdey.com/img/Content/avatar/avatar1.png',
                    'last_activity' => 'Today, 12:33'
                ],
                [
                    'name' => 'Katharina Nielsen',
                    'avatar' => 'https://bootdey.com/img/Content/avatar/avatar2.png',
                    'last_activity' => 'Today, 12:33'
                ],
                [
                    'name' => 'Katharina Nielsen',
                    'avatar' => 'https://bootdey.com/img/Content/avatar/avatar3.png',
                    'last_activity' => 'Today, 12:33'
                ],
                [
                    'name' => 'Flownadn Browerty',
                    'avatar' => 'https://bootdey.com/img/Content/avatar/avatar7.png',
                    'last_activity' => 'Today, 12:33'
                ],
                [
                    'name' => 'Vretihg Folsenthww',
                    'avatar' => 'https://bootdey.com/img/Content/avatar/avatar6.png',
                    'last_activity' => 'Today, 12:33'
                ],
                [
                    'name' => 'Katharina Nielsen',
                    'avatar' => 'https://bootdey.com/img/Content/avatar/avatar7.png',
                    'last_activity' => 'Today, 12:33'
                ],
            ],
            'viewed_stories' => [
                [
                    'name' => 'jonh Doe',
                    'avatar' => 'https://bootdey.com/img/Content/avatar/avatar8.png',
                    'last_activity' => 'Today, 02:33'
                ],
                [
                    'name' => 'Cartmanson Lawson',
                    'avatar' => 'https://bootdey.com/img/Content/avatar/avatar3.png',
                    'last_activity' => 'Today, 02:33'
                ],
                [
                    'name' => 'Martirty mclow',
                    'avatar' => 'https://bootdey.com/img/Content/avatar/avatar4.png',
                    'last_activity' => 'Today, 02:33'
                ],
                [
                    'name' => 'Martha Lawson',
                    'avatar' => 'https://bootdey.com/img/Content/avatar/avatar2.png',
                    'last_activity' => 'Today, 02:33'
                ]
            ]
        ];
        return response()->json(['user' => $user, 'members' => $members, 'success' => true]);
    }
}
