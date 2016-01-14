<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 14.01.16
 * Time: 15:26
 */

namespace VersionMatrix\Entity;


class Matrix
{

    private $data;

    /**
     * Matrix constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $data = [
            [
                'project' => [
                    'bundle1' => 'v1.1.1',
                    'bundle2' => 'v4.1.1',
                ],
            ],
        ];

//        "name": "doctrine/annotations",
//            "version": "v1.2.7",
//            "source": {
//        "type": "git",
//                "url": "https://github.com/doctrine/annotations.git",
//                "reference": "f25c8aab83e0c3e976fd7d19875f198ccf2f7535"
//            },

        //take care of forks

//        "name": "doctrine/doctrine-cache-bundle",
//            "version": "dev-feature/Predis-Provider",
//            "source": {
//        "type": "git",
//                "url": "git://github.com/ivoba/DoctrineCacheBundle.git",
//                "reference": "17f935bf070c511fe5130827fa955fd2ea39c3bf"
//            },


        $this->data = $data;
    }

}