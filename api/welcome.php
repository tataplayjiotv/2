<?php
header("Content-Type: application/dash+xml");

$baseUrl = "https://tataplayjiotv.github.io/intro/tataplayjiotv.m3u8"; // Your HLS stream URL
$duration = 10000; // Duration of each segment (in seconds)

echo '<?xml version="1.0"?>';
?>
<MPD xmlns="urn:mpeg:dash:schema:mpd:2011" 
     minBufferTime="PT1.5S" 
     profiles="urn:mpeg:dash:profile:isoff-live:2011" 
     type="dynamic" 
     publishTime="<?php echo gmdate('Y-m-d\TH:i:s\Z'); ?>" 
     minimumUpdatePeriod="PT5S" 
     timeShiftBufferDepth="PT1M" 
     availabilityStartTime="<?php echo gmdate('Y-m-d\TH:i:s\Z'); ?>" 
     suggestedPresentationDelay="PT10S" 
     maxSegmentDuration="PT<?php echo $duration; ?>S">
     
  <Period id="1" start="PT0S">
    <AdaptationSet segmentAlignment="true" maxWidth="1920" maxHeight="1080" maxFrameRate="30">
      <Representation id="1" mimeType="video/mp4" codecs="avc1.4d401f" width="1280" height="720" frameRate="30" bandwidth="3000000">
        <BaseURL><?php echo $baseUrl; ?></BaseURL>
        <SegmentTemplate media="segment_$Number$.m4s" initialization="init.mp4" timescale="1" duration="<?php echo $duration; ?>" startNumber="1"/>
      </Representation>
    </AdaptationSet>
  </Period>
</MPD>
