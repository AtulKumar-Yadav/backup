#include<stdio.h>
#include<stdlib.h>
#include<time.h>
int main()
{
    int number,guess,nguesses=1;
    srand(time(0));
    number=rand()%100 +1;
    // printf("the number is %d\n",number);
    do{
     printf("guess the number between 1 to 100: ");
        scanf("%d",&guess);
        if(guess>number){
            printf("lower number plz\n");
        }
        else if(guess<number){
            printf("higher number plz\n");
        }
        else{
            printf("you guesses in %d attempts\n",nguesses);
        }
        nguesses++;
    } while(guess!=number);
return 0;
}