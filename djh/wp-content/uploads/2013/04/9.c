#include <stdio.h>
int main()
{
	int i,j,k;
	for(i=1;i<332;i++)
		for(j=i+1;j<499;j++)
		{
			k=1000-i-j;
			if(i*i+j*j==k*k)printf("%d\n",i*j*k);
		}
	return 0;
}
