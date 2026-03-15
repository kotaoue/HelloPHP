# investigateCoverageOfConditionalOperator
Investigate coverage of conditional operator.

## Init
```shell
composer install
```

## Result
*
  ```ShellSession
  ./vendor/bin/phpunit --bootstrap src/Target.php tests/TargetTest.php --coverage-text > ./build/coverage-report.txt
  ```  
  -> [result](build/coverage-report.txt)
* 
  ```ShellSession
  phpdbg -qrr ./vendor/bin/phpunit --bootstrap src/Target.php tests/TargetTest.php --coverage-text > ./build/coverage-report-phpdbg.txt
  ```  
  -> [result](build/coverage-report-phpdbg.txt)
