# LineDumper
> Show and compare strings - line by line.

## Summary
This PHP class, `LineDumper`, provides a utility for comparing two strings line by line and highlights the differences between them. 

- If the strings are identical, it simply returns "Strings are equal!". 

- If they differ, it compares them line by line, indicating mismatches with color-coded output using ANSI escape codes.

## Details
- Namespace and Class Definition: The class is defined under the CornCodeCreators namespace.
- compareLines Method:
  - Input: It takes two strings, $expectedString and $actualString, which represent the expected output and the actual output.
  - Output: It returns a string containing either a confirmation that the strings are equal or a line-by-line comparison highlighting differences. 
  - String Splitting: The strings are split into arrays of lines using explode("\n", $string).
  - Line Number Width: The line numbers are padded to a width of 3 characters. 
  - Comparison: Each line from the expected string is compared to the corresponding line in the actual string:
    - If the lines match, it outputs them with a simple "ok" status.
    - If they don't match, it outputs the expected line in yellow (to-be) and the actual line in red (as-is).

## Example
**Input**
```php
$expected = "This is a line.\nAnother line.";
$actual   = "This is a line.\nAnother different line.";

$comparedLines = LineDumper::compareLines($expected, $actual);

echo($comparedLines);
```
**Output**
```shell
Line   1|   ok| This is a line.
Line   2|to-be| Another line.
Line   2|as-is| Another different line.
```

## Installation

```shell
$ composer require corncodecreators/line-dumper
```