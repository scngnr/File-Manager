<?php
namespace Aws\Panorama;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Panorama** service.
 * @method \Aws\Result createApplicationInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationInstanceAsync(array $args = [])
 * @method \Aws\Result createJobForDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobForDevicesAsync(array $args = [])
 * @method \Aws\Result createNodeFromTemplateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNodeFromTemplateJobAsync(array $args = [])
 * @method \Aws\Result createPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPackageAsync(array $args = [])
 * @method \Aws\Result createPackageImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPackageImportJobAsync(array $args = [])
 * @method \Aws\Result deleteDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeviceAsync(array $args = [])
 * @method \Aws\Result deletePackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePackageAsync(array $args = [])
 * @method \Aws\Result deregisterPackageVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterPackageVersionAsync(array $args = [])
 * @method \Aws\Result describeApplicationInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationInstanceAsync(array $args = [])
 * @method \Aws\Result describeApplicationInstanceDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationInstanceDetailsAsync(array $args = [])
 * @method \Aws\Result describeDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceAsync(array $args = [])
 * @method \Aws\Result describeDeviceJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceJobAsync(array $args = [])
 * @method \Aws\Result describeNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNodeAsync(array $args = [])
 * @method \Aws\Result describeNodeFromTemplateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNodeFromTemplateJobAsync(array $args = [])
 * @method \Aws\Result describePackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackageAsync(array $args = [])
 * @method \Aws\Result describePackageImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackageImportJobAsync(array $args = [])
 * @method \Aws\Result describePackageVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackageVersionAsync(array $args = [])
 * @method \Aws\Result listApplicationInstanceDependencies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationInstanceDependenciesAsync(array $args = [])
 * @method \Aws\Result listApplicationInstanceNodeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationInstanceNodeInstancesAsync(array $args = [])
 * @method \Aws\Result listApplicationInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationInstancesAsync(array $args = [])
 * @method \Aws\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \Aws\Result listDevicesJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesJobsAsync(array $args = [])
 * @method \Aws\Result listNodeFromTemplateJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNodeFromTemplateJobsAsync(array $args = [])
 * @method \Aws\Result listNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNodesAsync(array $args = [])
 * @method \Aws\Result listPackageImportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPackageImportJobsAsync(array $args = [])
 * @method \Aws\Result listPackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPackagesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result provisionDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise provisionDeviceAsync(array $args = [])
 * @method \Aws\Result registerPackageVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerPackageVersionAsync(array $args = [])
 * @method \Aws\Result removeApplicationInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeApplicationInstanceAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateDeviceMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceMetadataAsync(array $args = [])
 */
class PanoramaClient extends AwsClient {}
