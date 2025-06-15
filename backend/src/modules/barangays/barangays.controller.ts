import { Controller, Get } from '@nestjs/common';
import { BarangaysService } from './barangays.service';
import { Logger } from '@nestjs/common';

@Controller('api/v1/barangays')
export class BarangaysController {
    private readonly logger = new Logger(BarangaysController.name);

    constructor(private readonly barangaysService: BarangaysService) { }

    @Get()
    getAllBarangays() {
        this.logger.log('Getting all barangays');
        return this.barangaysService.getAllBarangays();
    }
}
