#include<stdio.h>
float average(int a,int b,int c);
int main()
{
float a,b,c;
printf("the averge of a  \n");
scanf("%f",&a);

printf("the averge of b\n");
scanf("%f",&b);

printf("the averge of c \n");
scanf("%f",&c);
printf("the average value is %f",average(a,b,c));

    return 0;
}
float average (int a,int b,int c){
 float result;
 result=(float)(a+b+c)/3;
 return result;
}