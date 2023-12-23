<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redis;
use Laravel\Lumen\Http\ResponseFactory;

class InitController extends Controller
{
    public function handle(): JsonResponse
    {
        $response = new ResponseFactory();
        $json = '
{
    "data": [
        {
            "id": 0,
            "name": "Jacobs Vang",
            "createdAt": "2004-11-26T12:11:25 -09:00",
            "updatedAt": "2015-03-22T08:42:04 -09:00"
        },
        {
            "id": 1,
            "name": "Deann Weeks",
            "createdAt": "2008-11-14T03:12:29 -09:00",
            "updatedAt": "2001-10-02T05:04:07 -09:00"
        },
        {
            "id": 2,
            "name": "Barnes Fisher",
            "createdAt": "2011-02-16T12:49:22 -09:00",
            "updatedAt": "2020-01-18T07:25:56 -09:00"
        },
        {
            "id": 3,
            "name": "Cherry Nielsen",
            "createdAt": "2010-06-12T04:29:56 -09:00",
            "updatedAt": "2007-03-23T04:16:42 -09:00"
        },
        {
            "id": 4,
            "name": "Joanne Morales",
            "createdAt": "2001-07-21T04:56:48 -09:00",
            "updatedAt": "2004-01-27T04:33:35 -09:00"
        },
        {
            "id": 5,
            "name": "Gale Winters",
            "createdAt": "2019-01-26T06:38:13 -09:00",
            "updatedAt": "2002-03-21T08:58:30 -09:00"
        },
        {
            "id": 6,
            "name": "Sykes Kirby",
            "createdAt": "2003-11-13T05:12:19 -09:00",
            "updatedAt": "2022-03-14T05:25:09 -09:00"
        },
        {
            "id": 7,
            "name": "Cherry Mays",
            "createdAt": "2015-05-01T05:25:53 -09:00",
            "updatedAt": "2003-05-29T10:35:35 -09:00"
        },
        {
            "id": 8,
            "name": "Rose Sweeney",
            "createdAt": "2009-03-31T03:11:16 -09:00",
            "updatedAt": "2022-12-20T08:50:57 -09:00"
        },
        {
            "id": 9,
            "name": "Matilda Powell",
            "createdAt": "2001-06-11T12:34:53 -09:00",
            "updatedAt": "2014-11-20T11:03:03 -09:00"
        },
        {
            "id": 10,
            "name": "Kellie Bailey",
            "createdAt": "2021-04-14T12:51:51 -09:00",
            "updatedAt": "2021-11-20T08:27:40 -09:00"
        },
        {
            "id": 11,
            "name": "George Mclaughlin",
            "createdAt": "2016-11-10T09:36:06 -09:00",
            "updatedAt": "2010-05-06T12:42:55 -09:00"
        },
        {
            "id": 12,
            "name": "Osborne Townsend",
            "createdAt": "2017-05-15T05:04:46 -09:00",
            "updatedAt": "2014-04-06T10:11:06 -09:00"
        },
        {
            "id": 13,
            "name": "Adeline Poole",
            "createdAt": "2020-01-20T01:51:10 -09:00",
            "updatedAt": "2015-04-23T11:44:11 -09:00"
        },
        {
            "id": 14,
            "name": "Priscilla Waller",
            "createdAt": "2006-12-12T12:34:11 -09:00",
            "updatedAt": "2003-02-06T01:16:29 -09:00"
        },
        {
            "id": 15,
            "name": "Ramona Sawyer",
            "createdAt": "2004-11-05T04:29:36 -09:00",
            "updatedAt": "2009-03-05T09:32:06 -09:00"
        },
        {
            "id": 16,
            "name": "Deana Britt",
            "createdAt": "2011-11-15T01:46:39 -09:00",
            "updatedAt": "2011-08-20T05:42:20 -09:00"
        },
        {
            "id": 17,
            "name": "Bethany Hale",
            "createdAt": "2013-08-14T06:19:06 -09:00",
            "updatedAt": "2010-03-28T09:52:14 -09:00"
        },
        {
            "id": 18,
            "name": "Mccarty Bowen",
            "createdAt": "2010-02-02T04:27:23 -09:00",
            "updatedAt": "2022-05-06T05:56:22 -09:00"
        },
        {
            "id": 19,
            "name": "Betty Buchanan",
            "createdAt": "2015-12-31T05:12:31 -09:00",
            "updatedAt": "2022-12-11T12:09:42 -09:00"
        },
        {
            "id": 20,
            "name": "Spence Donaldson",
            "createdAt": "2009-01-13T04:20:38 -09:00",
            "updatedAt": "2018-06-24T04:11:02 -09:00"
        },
        {
            "id": 21,
            "name": "Joyce Keller",
            "createdAt": "2021-05-16T02:04:50 -09:00",
            "updatedAt": "2019-06-01T10:44:41 -09:00"
        },
        {
            "id": 22,
            "name": "Lana Ramirez",
            "createdAt": "2012-02-24T01:03:50 -09:00",
            "updatedAt": "2008-11-07T10:48:54 -09:00"
        },
        {
            "id": 23,
            "name": "Constance Oneill",
            "createdAt": "2010-11-09T09:52:18 -09:00",
            "updatedAt": "2020-12-21T05:17:24 -09:00"
        },
        {
            "id": 24,
            "name": "John Sharpe",
            "createdAt": "2013-02-03T10:47:00 -09:00",
            "updatedAt": "2002-01-18T11:30:05 -09:00"
        },
        {
            "id": 25,
            "name": "Katharine Harrison",
            "createdAt": "2009-04-13T12:21:45 -09:00",
            "updatedAt": "2008-06-02T01:33:41 -09:00"
        },
        {
            "id": 26,
            "name": "Anderson Cooke",
            "createdAt": "2003-07-08T05:30:50 -09:00",
            "updatedAt": "2002-01-19T04:19:44 -09:00"
        },
        {
            "id": 27,
            "name": "Justice Bowman",
            "createdAt": "2009-05-19T11:01:01 -09:00",
            "updatedAt": "2021-06-29T05:54:37 -09:00"
        },
        {
            "id": 28,
            "name": "Chelsea Workman",
            "createdAt": "2022-01-11T11:22:08 -09:00",
            "updatedAt": "2006-11-19T03:40:35 -09:00"
        },
        {
            "id": 29,
            "name": "Hansen Cabrera",
            "createdAt": "2016-05-27T04:26:06 -09:00",
            "updatedAt": "2004-02-09T04:28:45 -09:00"
        },
        {
            "id": 30,
            "name": "Alberta Hogan",
            "createdAt": "2006-06-05T05:59:29 -09:00",
            "updatedAt": "2020-12-14T08:29:37 -09:00"
        },
        {
            "id": 31,
            "name": "Wendi Nicholson",
            "createdAt": "2020-08-08T12:51:48 -09:00",
            "updatedAt": "2001-04-19T02:14:07 -09:00"
        },
        {
            "id": 32,
            "name": "Jannie Fuller",
            "createdAt": "2007-03-28T01:10:11 -09:00",
            "updatedAt": "2015-10-29T10:04:37 -09:00"
        },
        {
            "id": 33,
            "name": "Cruz Valencia",
            "createdAt": "2016-12-06T06:03:22 -09:00",
            "updatedAt": "2019-07-09T08:14:14 -09:00"
        },
        {
            "id": 34,
            "name": "Donna Waters",
            "createdAt": "2012-01-01T10:09:02 -09:00",
            "updatedAt": "2001-08-08T07:44:01 -09:00"
        },
        {
            "id": 35,
            "name": "Gilda Hatfield",
            "createdAt": "2023-07-21T09:44:13 -09:00",
            "updatedAt": "2019-09-05T04:32:02 -09:00"
        },
        {
            "id": 36,
            "name": "Hooper Deleon",
            "createdAt": "2011-07-19T08:40:28 -09:00",
            "updatedAt": "2018-08-30T10:26:47 -09:00"
        },
        {
            "id": 37,
            "name": "Yvonne Guthrie",
            "createdAt": "2020-11-21T09:15:11 -09:00",
            "updatedAt": "2007-03-11T09:23:14 -09:00"
        },
        {
            "id": 38,
            "name": "Harrington Levine",
            "createdAt": "2008-12-26T05:49:51 -09:00",
            "updatedAt": "2019-02-25T06:51:24 -09:00"
        },
        {
            "id": 39,
            "name": "Mattie Erickson",
            "createdAt": "2010-10-20T12:01:18 -09:00",
            "updatedAt": "2020-11-24T04:30:37 -09:00"
        },
        {
            "id": 40,
            "name": "Vincent Nash",
            "createdAt": "2002-09-28T02:01:01 -09:00",
            "updatedAt": "2003-09-13T06:04:33 -09:00"
        },
        {
            "id": 41,
            "name": "Baird Richard",
            "createdAt": "2004-12-14T03:00:35 -09:00",
            "updatedAt": "2018-05-16T04:17:11 -09:00"
        },
        {
            "id": 42,
            "name": "Kidd Black",
            "createdAt": "2012-01-17T11:57:06 -09:00",
            "updatedAt": "2018-09-05T01:26:59 -09:00"
        },
        {
            "id": 43,
            "name": "Munoz Mcclain",
            "createdAt": "2014-02-17T12:05:05 -09:00",
            "updatedAt": "2011-06-08T08:29:46 -09:00"
        },
        {
            "id": 44,
            "name": "Elisa Hudson",
            "createdAt": "2005-11-08T08:06:32 -09:00",
            "updatedAt": "2011-10-12T03:09:50 -09:00"
        },
        {
            "id": 45,
            "name": "Perry Mullen",
            "createdAt": "2004-12-18T07:46:53 -09:00",
            "updatedAt": "2022-05-13T05:18:08 -09:00"
        },
        {
            "id": 46,
            "name": "Greta Miles",
            "createdAt": "2004-06-08T10:26:54 -09:00",
            "updatedAt": "2011-08-27T01:29:52 -09:00"
        },
        {
            "id": 47,
            "name": "Erica Moody",
            "createdAt": "2012-06-16T06:05:42 -09:00",
            "updatedAt": "2004-08-10T04:14:29 -09:00"
        },
        {
            "id": 48,
            "name": "Hunt Foley",
            "createdAt": "2019-11-24T07:50:29 -09:00",
            "updatedAt": "2013-05-08T04:04:55 -09:00"
        },
        {
            "id": 49,
            "name": "Lula Gibbs",
            "createdAt": "2020-10-05T05:47:31 -09:00",
            "updatedAt": "2020-12-16T02:26:25 -09:00"
        }
    ]
}';

        $decoded = json_decode($json, true);
        foreach ($decoded['data'] as $index => $value) {
            Redis::set(
                "USER_{$index}",
                "{
                    'id': {$value['id']},
                    'name': {$value['name']},
                    'createdAt':{$value['createdAt']},
                    'updatedAt':{$value['updatedAt']},
                }"
            );
        }

        return $response
            ->json([
                'status' => 'returned',
            ])
        ;
    }
}
