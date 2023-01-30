#include<stdio.h>
int main()
{
    int a;
    printf("enter the number:");
    scanf("%d",&a);

do{
    printf("%d\n",a);
    if(a==6){
    break;
    }
    a++;
}while(a<10);
return 0;
}
