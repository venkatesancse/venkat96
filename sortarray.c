#include<stdio.h>
void main()
   {
 int i, j, a, n, ar[30];
 scanf("%d", &n);
 for (i = 0; i < n; ++i)
 scanf("%d", &ar[i]);
 if(2<=n && n<=1000)
 {
 for (i = 0; i < n; ++i) 
       {
       for (j = i + 1; j < n; ++j)
            {
                if (ar[i] > ar[j]) 
                {
                 a =  ar[i];
                 ar[i] = ar[j];
                 ar[j] = a;
                 }
             }
        }
  for (i = 0; i < n; ++i)
            printf("%d \t", ar[i]);
 }
 else
 {
 printf("Invalid");
 }
    }
