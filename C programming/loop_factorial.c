#include<stdio.h>
int main()
{
    int a=0,factorial=1,n=5;
    printf("enter the number");
for (a=1;a<=n;a++)
{
factorial*=a;
}
printf("the factorial  %d is %d",n,factorial);
return 0;
}