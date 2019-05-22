#include<stdio.h>
void main()
{
int l;
scanf("%d",&l);
((l%4==0 && l%100!=0) ||(l%400==0)) ? printf("Yes") : printf("No");
}
