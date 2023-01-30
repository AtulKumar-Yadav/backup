#include<stdio.h>
int main()
{
    int maths,chemistry,physics;
    int total;
    printf("enter your maths marks :");
    scanf("%d",&maths);
    printf("enter your chemistry marks :");
    scanf("%d",&chemistry);
    printf("enter your physics marks :");
    scanf("%d",&physics);

   total=(physics+maths+chemistry)/3;

  if(total<40 || maths<30 || chemistry<30 || physics<30){
    printf("your total percentage is %d and you are fail");
  }
  else{
    printf("your total percentage is %d and you are pass");
  }
  return 0;
}
