#include<stdio.h>
int main()
{
    int a;
    printf("enter the number\n");
    scanf("%d",&a);
    if(a<=10)
    {
        printf("your number is under 10 %d \n",a);
    }
    else if(a<=20)
    {
        printf("your number is under 20 %d \n",a);
    }
    else{
    printf("your number is not in a list \n",a);
    }
    return 0;
}
