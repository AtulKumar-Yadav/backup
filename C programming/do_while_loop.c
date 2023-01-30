#include<stdio.h>
int main()
{
    int a=0;
    printf("enter the number:");
    scanf("%d",&a);
    do{
        printf("the value of a is %d\n",a);
        a++;
     } while(a<=10);

return 0;
}