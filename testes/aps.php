<?php 
//{a^i b^j / i=j}
$ab_iguais=[
    'q0' => [
        '&' => [
            'z0' => ['q1', ["z0"]]
        ],
        'a' => [
            'z0' => ['q1', ['z0','x']],
        ],
        'b' => [
            'z0' => ['q1', ['z0','y']],
        ]
    ],
    'q1' => [
        '&' => [
            'z0' => ['f', ['z0']]
        ],
        'a' => [
            'x' => ['q1', ['x','x']],
            'z0' => ['q1', ['z0','x']],
            'y' => ['q1', []]
        ],
        'b' => [
            'x' => ['q1', []],
            'y' => ['q1', ['y','y']],
            'z0' => ['q1', ['z0', 'y']]
        ]
    ],
    'f' => []
];
//{a* b^i c^j / i!=j}
$delta = [
    'q0' => [
        'a' => [
            'z0' => ['q0', ["z0"]]
        ],
        'b' => [
            'z0' => ['q1', ["z0", "x"]],
        ],
        'c' => [
            'z0' => ['q2', ["z0"]],
        ],
    ],
    'q1' => [
        'b' => [
            'x' => ['q1', ["x", "x"]],
            'y' => ['q2', []],
        ],
        'c' => [
            'x' => ['q2', []],
            'y' => ['q1', ["y", "y"]],
        ],
        '&' => [
            'x' => ['f', []],
            'y' => ['f', []],
        ],
    ],
    'q2' => [
        'c' => [
            'x' => ['q2', []],
            'z0' => ['q1', ["z0", "y"]],
            'y' => ['q1', ["y", "y"]],
        ],
        '&' => [
            'z0' => ['q3', []],
            'x' => ['f', []],
            'y' => ['f', []]
        ],
    ],
    'q3'=>[],
    'f' => []
];
$espelhada = [
    'q0' => [
        'a' => [
            'z0' => ['q0', ['z0', 'x']],
            'x' => ['q0', ['x', 'x']],
            'y' => ['q0', ['y', 'x']]
        ],
        'b' => [
            'z0' => ['q0', ['z0', 'y']],
            'x' => ['q0', ['x', 'y']],
            'y' => ['q0', ['y', 'y']]
        ],
        '#' => [
            'z0' => ['q1', ['z0']],
            'x' => ['q1', ['x']],
            'y' => ['q1', ['y']]
        ]
    ],
    'q1' => [
        'a' => [
            'x' => ['q1', []]
        ],
        'b' => [
            'y' => ['q1', []]
        ],
        '&' => [
            'z0' => ['f', ['z0']]
        ]
    ],
    'f' => []
];
?>