<?php
$array3D = array(
            //1st Dimension
                0=> array(
                    //2nd Dimension
                        0 => array(
                                //3rd Dimension
                                    0=> '3rd level-000',
                                    1=> '3rd level-001'
                                    ),
                        1 => array(
                                    0=> '3rd level-010',
                                    1=> '3rd level-011'
                                    ),
                        ),
                1 => array(
                            0=> array(
                                    0=> '3rd level-100',
                                    1=> '3rd level-101'
                                    ),
                            1=> array(
                                    0=> '3rd level-110',
                                    1=> '3rd level-111'
                                    ),
                            ),


                );

 print_r ($array3D[1][0][1]);