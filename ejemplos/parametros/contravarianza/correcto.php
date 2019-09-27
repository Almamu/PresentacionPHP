<?php declare(strict_types=1);
        interface ITest
        {
                function dotest(ITest $input);
        };

        class CTestMain implements ITest
        {
                function dotest (ITest $input)
		{
			var_dump ($input);
		}
        };

        class CTest extends CTestMain
        {
                function dotest ($input)
                {
                        var_dump ($input);
                }
        };


        $tmp = new CTest ();
	$tmp->dotest ($tmp);
        $tmp->dotest (['asdf']);
        $tmp->dotest ('asdf');

	$tmp2 = new CTestMain ();
	$tmp2->dotest ($tmp2);
	$tmp2->dotest (['asdf']);
	$tmp2->dotest ('asdf');
