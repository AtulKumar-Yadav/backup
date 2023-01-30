#include<stdio.h>
void swap(int *x,int *y);
int main()
{
    int x=3,y=6;
    printf("the value of x and y before swap %d and %d\n",x,y);
    swap(&x,&y);
    printf("the value of x and y after swap %d and %d\n",x,y);
return 0;
}
void swap(int *x,int *y)
{
int temp;
 temp =*x;
 *x = *y;
*y = temp;

}