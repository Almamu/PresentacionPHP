<?php declare(strict_types=1);
        interface ITest
        {
                function dotest(ITest $input);
        };

        class CTestMain implements ITest
        {
                function dotest (ITest $input);
        };

        class CTest extends CTestMain
        {
                function dotest (CTestMain $input)
                {
                        var_dump ($input);
                }
        };


        $tmp = new CTest ();
	$tmp->dotest ($tmp);
        $tmp->dotest (['asdf']);
        $tmp->dotest ('asdf');

