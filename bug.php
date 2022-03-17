class MyException extends Exception {}
class MySubException extends MyException {}

try {
  doSomething();
} catch (MyException $e) {
  echo $e;
} catch (MySubException $e) { // Noncompliant: MySubException is a subclass of MyException
  echo "Never executed";
}
class NoThrowable {}

try {
    foo();
} catch (NoThrowable $e) { // Noncompliant
}
