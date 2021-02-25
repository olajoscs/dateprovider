# DateProvider
A simple library to replace `new \DateTime` or `new \DateTimImmutable` in your code.
### Why?
Testing is hard when you have hidden dependencies. Getting the current time is one of them, as it is always changing.
### How to use
Classes should depend on the `DateProvider` interface.
There are 2 implementations in the library:
- `CurrentDateProvider`: returns the current date/time, just like `new \DateTimeImmutable`, your DI container should instantiate this one
- `ExactDateProvider`: returns an exact date/time, which can be used to simulate time pass, useful when writing tests.
