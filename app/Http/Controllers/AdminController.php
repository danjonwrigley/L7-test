<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * [Controller for the dashboard page]
     * @return [view object] [pass the pages title to the view]
     */
    public function dashboard()
    {
        $pageTitle = Str::ucfirst('about');

        $charts = [
            'posts' => [
                'name' => 'posts',
                'type' => 'bar',
                'data' => [
                    'labels' => ['Members', 'Trialists', 'Raiders', 'Core Raiders', 'Class Leaders', 'Officers', 'GMs'],
                    'datasets' => [
                        [
                            'label' => 'No. of Posts by Users',
                            'data' => [12, 19, 30, 40, 25, 12, 3],
                            'backgroundColor' => [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(40, 167, 69, 0.2)',
                            ],
                            'borderColor' => [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(40, 167, 69, 1)',
                            ],
                            'borderWidth' => 1,
                        ],
                    ],
                ],
            ],
            'users' => [
                'name' => 'users',
                'type' => 'pie',
                'data' => [
                    'labels' => ['Members', 'Trialists', 'Raiders', 'Core Raiders', 'Class Leaders', 'Officers', 'GMs'],
                    'datasets' => [
                        [
                            'label' => 'No. of Users',
                            'data' => [43, 12, 27, 14, 8, 3, 2],
                            'backgroundColor' => [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(40, 167, 69, 0.2)',
                            ],
                            'borderColor' => [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(40, 167, 69, 1)',
                            ],
                            'borderWidth' => 1,
                        ],
                    ],
                ],
            ],
            'msgs' => [
                'name' => 'msgs',
                'type' => 'line',
                'data' => [
                    'labels' => ['Members', 'Trialists', 'Raiders', 'Core Raiders', 'Class Leaders', 'Officers', 'GMs'],
                    'datasets' => [
                        [
                            'label' => 'Messages',
                            'data' => [43, 12, 27, 14, 8, 3, 2],
                            'backgroundColor' => [
                                'rgba(255, 99, 132, 0.2)',
                            ],
                            'borderColor' => [
                                'rgba(255, 99, 132, 1)',
                            ],
                            'borderWidth' => 1,
                        ],
                    ],
                ],
            ],
        ];

        return view('admin.dashboard', compact('charts', 'pageTitle'));
    }
}
