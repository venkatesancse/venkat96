#include<stdio.h>
void swap(int *p,int *q)
 {
 int t;
 t=*p;
 *p=*q;
 *q=t;
 }
void main()
{
int i,j,n,val[100],temp;
scanf("%d", &n);
for(i=0;i<n;++i)
scanf("%d",&val[i]);
if(1<=n && n<=10000)
{
for(i=0;i<n-1;i++)
{
for(j=0;j<n-i-1;j++)
{
if(val[j]>val[j+1])
  {
  swap(&val[j],&val[j+1]);
  }
 }
 }
 
 n=(n+1)/2-1;
 printf("%d",val[n]);
 }
 else
 {
 printf("Invalid");
 }
 }
 
    
