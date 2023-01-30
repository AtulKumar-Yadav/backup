#include <stdio.h>
int numbers(int num);

int main()
{
    int num;
    printf("The value of numbers is : ");
    scanf("%d", &num);
    sumNum(num);
    return 0;
}
int sumNum(int num)
{
    int sum = 0;
    for (int i = 0; i <= num; i++)
    {
        printf("Sum till %d = %d\n", i, sum += i);
    }   
}