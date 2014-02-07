/* 
	Particle Engine options:
	
	positionBase   : new THREE.Vector3(),
	positionStyle : Type.CUBE or Type.SPHERE,

	// for Type.CUBE
	positionSpread  : new THREE.Vector3(),

	// for Type.SPHERE
	positionRadius  : 10,
	
	velocityStyle : Type.CUBE or Type.SPHERE,

	// for Type.CUBE
	velocityBase       : new THREE.Vector3(),
	velocitySpread     : new THREE.Vector3(), 

	// for Type.SPHERE
	speedBase   : 20,
	speedSpread : 10,
		
	accelerationBase   : new THREE.Vector3(),
	accelerationSpread : new THREE.Vector3(),
		
	particleTexture : THREE.ImageUtils.loadTexture( 'images/star.png' ),
		
	// rotation of image used for particles
	angleBase               : 0,
	angleSpread             : 0,
	angleVelocityBase       : 0,
	angleVelocitySpread     : 0,
	angleAccelerationBase   : 0,
	angleAccelerationSpread : 0,
		
	// size, color, opacity 
	//   for static  values, use base/spread
	//   for dynamic values, use Tween
	//   (non-empty Tween takes precedence)
	sizeBase   : 20.0,
	sizeSpread : 5.0,
	sizeTween  : new Tween( [0, 1], [1, 20] ),
			
	// colors stored in Vector3 in H,S,L format
	colorBase   : new THREE.Vector3(0.0, 1.0, 0.5),
	colorSpread : new THREE.Vector3(0,0,0),
	colorTween  : new Tween( [0.5, 2], [ new THREE.Vector3(0, 1, 0.5), new THREE.Vector3(1, 1, 0.5) ] ),

	opacityBase   : 1,
	opacitySpread : 0,
	opacityTween  : new Tween( [2, 3], [1, 0] ),
	
	blendStyle    : THREE.NormalBlending (default), THREE.AdditiveBlending

	particlesPerSecond : 200,
	particleDeathAge   : 2.0,		
	emitterDeathAge    : 60	
*/

Effects =
{
	tornado :
	{
		positionStyle    : Type.CUBE,
		//positionBase     : new THREE.Vector3( 200, -210, 0 ), // x = 0, y = 0 // 200 -80 0
		xyz              : { x:200, y:-210, z:0 },
		
		positionSpread   : new THREE.Vector3( 10, 0, 10 ), // 10 0 10

		velocityStyle    : Type.CUBE,
		velocityBase     : new THREE.Vector3( 0, 200, 0 ), // 0 150 0
		velocitySpread   : new THREE.Vector3( 20, 60, 80 ), // 80 50 80 
		accelerationBase : new THREE.Vector3( -10, 0,0 ), // 0 -10 0
		
		particleTexture : THREE.ImageUtils.loadTexture( 'smokeparticle.png' ),

		angleBase               : 0,
		angleSpread             : 720,
		angleVelocityBase       : 0,
		angleVelocitySpread     : 720,
		
		sizeTween    : new Tween( [0, 1], [32, 128] ),
		//opacityTween : new Tween( [0.8, 2], [0.5, 0] ),
		colorTween   : new Tween( [0.4, 1], [ new THREE.Vector3(0,0,0.2), new THREE.Vector3(0, 0, 0.5) ] ),

		particlesPerSecond : 500, // 200
		particleDeathAge   : 2.0, // 2		
		emitterDeathAge    : 60 // 60
		
		,opacityTween : new Tween( [0.2, 0.7, 2.5], [0.75, 1, 0] )
	},
	
	clouds :
	{
		positionStyle  : Type.CUBE,
		//positionBase   : new THREE.Vector3( 200, 170,  0 ), // x=-100 y=100 // 0 170 0
		xyz              : { x:200, y:170, z:0 },
		
		positionSpread : new THREE.Vector3( 10, 25, 60 ), // y = 50
		
		velocityStyle  : Type.CUBE,
		velocityBase   : new THREE.Vector3( 40, -15, -20 ), // 40 0 0 
		velocitySpread : new THREE.Vector3( 1000, 0, 0 ), //x=20 0 0 // 1000 0 0
		
		particleTexture : THREE.ImageUtils.loadTexture( 'smokeparticle.png' ),

		//sizeBase     : 10.0, //80
		//sizeSpread   : 10.0, //100
		colorBase    : new THREE.Vector3(0.0, 0.5, 1.0), // H,S,L
		//colorTween   : new Tween( [0.4, 1], [ new THREE.Vector3(0,0,0.2), new THREE.Vector3(0, 0, 0.5) ] ),
		opacityTween : new Tween([0,1,4,5],[0,1,1,0]),

		particlesPerSecond : 800, //50 // 500
		particleDeathAge   : 10.0,		
		emitterDeathAge    : 60
	}
}