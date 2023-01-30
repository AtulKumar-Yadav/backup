#include<stdio.h>
int fabonacci(int n);
int main()
{
    int n;
    printf("enter the number\n");
    scanf("%d",&n);
    printf("the fabonacci series %d\n",fabonacci(n));
    return 0;
}
int fabonacci(int n){
    if(n==1 || n==2)
    {
      return 1;  
    }
    else{
        return fabonacci(n-1) + fabonacci(n-2);
    }
}