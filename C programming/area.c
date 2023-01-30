#include<stdio.h>
int main()
{
    float length,breath;
    printf("what is the length of rectangle\n");
    scanf("%f",&length);
    printf("what is the breath of the rectangle\n");
    scanf("%f",&breath);
    printf("the area of the rectangle %.2f",length*breath);
    return 0;
}