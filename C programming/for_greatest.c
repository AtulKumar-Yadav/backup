#include<stdio.h>
int main()
{
    int num1,num2,num3,num4;
    printf("enter the number");
    scanf("%d",&num1);

    printf("enter the number");
    scanf("%d",&num2);

    printf("enter the number");
    scanf("%d",&num3);

    printf("enter the number");
    scanf("%d",&num4);
    if(num1<num2){
        printf(" greatest number %d",num2);
    }
    else if(num2<num3){
        printf("greatest number %d",num3);
    }
   else if(num3<num4){
        printf("greatest number %d",num4);
    }
    else{
        printf("greatest number is %d",num1);
    }

    return 0;
}