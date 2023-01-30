#include <stdio.h>
int main()
{
    int a = 0;
    int skip = 8;
    printf("enter the number:");
    scanf("%d", &a);

    while (a < 20)
    {
        a++;
        if (a != skip)
        {
            continue;
        }
        else
        {
            printf("%d\n", a);
        }
    }

    return 0;
}
