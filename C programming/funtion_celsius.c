#include <stdio.h>
int converter(int celsius);

int main()
{
    int cel, temp;
    printf("Enter The  value of celsius: ");
    scanf("%d", &cel);
    temp = converter(cel);
    printf("Converted temperature is %d", temp);
}

int converter(int cel)
{
    return (cel * 9 / 5) + 32;

    // printf("Converted temperature is %d", ((cel * 9 / 5) + 32));
}