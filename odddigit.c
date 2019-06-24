#include<stdio.h>
void Digit(int n)
{   
 if (n < 0)
  n = -1*n;
    if (n/10 > 0)
      Digit(n/10);  
	if(n&1==1)          
    printf("%d ",n%10);
}
int main()
{
	int num;
	scanf("%d",&num);
	Digit(num); 
	return 0;
}
