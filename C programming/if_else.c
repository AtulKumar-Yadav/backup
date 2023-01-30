#include<stdio.h> 
int main()
{
    int a;
    printf("enter the number");
    scanf("%d",&a);
    if(a%2==0)
    {
        printf("number is even %d \n",a);
    }
    else
    printf("number is odd %d \n",a);
    return 0;
}