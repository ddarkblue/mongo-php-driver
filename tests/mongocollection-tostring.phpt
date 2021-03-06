--TEST--
MongoCollection::__toString()
--DESCRIPTION--
Test implicit and explicit __toString
--FILE--
<?php
$m = new Mongo();
$c = $m->phpunit->col;
echo "This is collection $c\n";
echo "This is collection ".$c->__toString()."\n";
$c = $m->selectCollection('phpunit', 'col2');
echo "This is collection $c\n";
echo "This is collection ".$c->__toString()."\n";
?>
--EXPECT--
This is collection phpunit.col
This is collection phpunit.col
This is collection phpunit.col2
This is collection phpunit.col2
